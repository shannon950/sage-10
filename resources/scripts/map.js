document.addEventListener('DOMContentLoaded', function () {
    const map = document.getElementById('map');
    const locationMarkers = document.querySelectorAll('.marker-location');

    const updateMarkers = () => {
        positionMarkers(map, locationMarkers);
    };

    window.addEventListener('load', updateMarkers);
    window.addEventListener('resize', updateMarkers);

    const closeLocationCards = () => {
        const locationCards = document.querySelectorAll('[data-location-target]')
        locationCards.forEach(card => {
            card.classList.add('hide-item')
        })
    }

    const resetActivePins = () => {
        const pins = document.querySelectorAll(`[data-location]`)
        pins.forEach(pin => {
            pin.classList.remove('active')
        })
    }

    const closeZoomedMap = () => {
        const regionMaps = document.querySelectorAll('[data-map]')
        regionMaps.forEach(map => {
            map.classList.add('hide-item')
        })
    }

    const hideBackBtn = () => {
        const backBtn = document.querySelector('[data-back-to-overview]')
        backBtn.style.zIndex = '-1';
    }

    const showBackBtn = () => {
        const backBtn = document.querySelector('[data-back-to-overview]')
        backBtn.style.zIndex = '20';
    }

    const hideWorldMap = () => {
        const worldMap = document.querySelector('#map')
        worldMap.classList.add('hide-item')
    }

    const showWorldMap = () => {
        const worldMap = document.querySelector('#map')
        worldMap.classList.remove('hide-item')
    }

    const resetToWorldMap = () => {
        closeLocationCards()
        closeZoomedMap()
        showWorldMap()
        updateMarkers()
        hideBackBtn()
        resetActivePins()
    }

    const locationPin = document.querySelectorAll('[data-location]')
    locationPin.forEach(pin => {
        pin.addEventListener('click', () => {
            // Reset
            resetToWorldMap();

            // Hide world map
            hideWorldMap()

            // Show map region
            const mapRegion = pin.getAttribute('data-map-region');
            const currentMap = document.querySelector(`[data-map="${mapRegion}"]`)
            currentMap.classList.remove('hide-item')

            // Position markers on region map
            const regionMarkers = document.querySelectorAll(`[data-map-region="${mapRegion}"]`);
            positionZoomMarkers(currentMap, regionMarkers)
            showBackBtn()
            resetActivePins()

            // Show card that matches this pin
            const locationValue = pin?.getAttribute('data-location');
            if (locationValue) {
                const locationCard = document.querySelector(`[data-location-target="${locationValue}"]`)
                pin.classList.add('active')
                locationCard.classList.remove('hide-item')
            }

            // Restore if you want to show first card from cluster when cluster is clicked
            // // If it's a cluster pin
            // const clusterCheck = pin.querySelector('.marker-pin-cluster')
            // if (clusterCheck) {
            //     // Get first location from the region
            //     const pinsInRegion = document.querySelectorAll(`[data-map-region="${mapRegion}"]`)

            //     // Start with 1 as 0 is cluster pin
            //     const firstLocation = pinsInRegion[1].getAttribute('data-location')
            //     const firstPin = document.querySelector(`[data-location="${firstLocation}"]`)
            //     const firstCard = document.querySelector(`[data-location-target="${firstLocation}"]`)

            //     firstPin.classList.add('active')
            //     firstCard.classList.remove('hide-item')
            // }

        })
    })

    // Location card - close button. Exit location.
    const locationCardCloseBtn = document.querySelectorAll('.expand-icon-map')
    if (locationCardCloseBtn) {
        locationCardCloseBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                resetToWorldMap()
            })
        })
    }

    // Back to world map button
    const backBtn = document.querySelector('[data-back-to-overview]')
    if (backBtn) {
        backBtn.addEventListener('click', () => {
            resetToWorldMap()
        })
    }

    if (map) {
        updateMarkers()
        hideBackBtn()
    }

    document.querySelectorAll('[data-location] .marker-pin, [data-location] .marker-pin::before').forEach((element, index) => {
        const delay = (index * 0.2) % 0.8; // Calculate delay, reset to 0 after reaching 0.7
        element.style.animationDelay = delay.toFixed(1) + 's';
    });

    /*
    Mobile accordion logic uses those two data attributes:
    - data-continent
    - data-belongs-to
    */
    const resetAccordion = () => {
        const places = document.querySelectorAll(`[data-belongs-to]`);
        const continents = document.querySelectorAll(`[data-continent]`);
        places.forEach(place => place.classList.remove('show-item', 'open'))
        continents.forEach(continent => continent.classList.contains('open') ? continent.classList.remove('open') : null)
    }

    const accordion = () => {
        const continents = document.querySelectorAll(`[data-continent]`);

        continents.forEach(continent => {
            continent.addEventListener('click', () => {
                const continentName = continent.getAttribute('data-continent');

                // Toggle 'open' class on the clicked continent
                continent.classList.toggle('open');

                // Find places assigned to this continent
                const places = document.querySelectorAll(`[data-belongs-to="${continentName}"]`);
                places.forEach(place => {
                    place.classList.toggle('show-item')
                });
            });
        });

        // expand/hide inner tab
        const allInnerTabs = document.querySelectorAll('[data-mobile-tab]');
        allInnerTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tab.closest('.marker-logo').classList.toggle('open');
            });
        });
    }
    accordion();

    let initialWindowWidth = window.innerWidth;
    window.addEventListener('resize', () => {
        if(window.innerWidth !== initialWindowWidth) {
            // momentum scroll on mobile seemed to be triggering a resize
            // this now only triggers if the width has changed e.g. a user actually resizes the window
            resetAccordion()
        }
    });
});

const positionMarkers = (map, locationMarkers) => {
    if (!map) return;

    const mapRect = map.getBoundingClientRect();

    locationMarkers.forEach(marker => {
        const xPercent = marker.getAttribute('data-x');
        const yPercent = marker.getAttribute('data-y');
        const xPos = (mapRect.width * xPercent) / 100;
        const yPos = (mapRect.height * yPercent) / 100;
        marker.style.left = `${xPos}px`;
        marker.style.top = `${yPos}px`;
        marker.style.zIndex = '1';
    });
};

const positionZoomMarkers = (currentMap, currentRegionMarkers) => {
    if (!currentMap) return;

    const mapRect = currentMap.getBoundingClientRect();

    currentRegionMarkers.forEach(marker => {
        const xPercent = marker.getAttribute('data-x-zoom');
        const yPercent = marker.getAttribute('data-y-zoom');
        const xPos = (mapRect.width * xPercent) / 100;
        const yPos = (mapRect.height * yPercent) / 100;
        marker.style.left = `${xPos}px`;
        marker.style.top = `${yPos}px`;
        marker.style.zIndex = '20';
    });
};