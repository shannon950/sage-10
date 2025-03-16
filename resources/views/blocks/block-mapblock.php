<?php
 
/**
 * Block Name: Map Block
 *
 * This is the template that displays themap with multiple markers.
 */

// Create variables from custom fields here.
 
$map_heading = get_field('map_title', 'option');
$map_content = get_field('map_intro_text', 'option');
   
// Location One Fields
$location_details_one = get_field('location_details_one', 'option');
$location_address_one = get_field('location_address_one', 'option');
$location_logo_one = get_field('location_logo_one', 'option');
$location_website_one = get_field('location_website_one', 'option');

// Location Two Fields
$location_details_two = get_field('location_details_two', 'option');
$location_address_two = get_field('location_address_two', 'option');
$location_logo_two = get_field('location_logo_two', 'option');
$location_website_two = get_field('location_website_two', 'option');

// Location Three Fields
$location_details_three = get_field('location_details_three', 'option');
$location_address_three = get_field('location_address_three', 'option');
$location_logo_three = get_field('location_logo_three', 'option');
$location_website_three = get_field('location_website_three', 'option');

// Location Four Fields
$location_details_four = get_field('location_details_four', 'option');
$location_address_four = get_field('location_address_four', 'option');
$location_logo_four = get_field('location_logo_four', 'option');
$location_website_four = get_field('location_website_four', 'option');

// Location Five Fields
$location_details_five = get_field('location_details_five', 'option');
$location_address_five = get_field('location_address_five', 'option');
$location_logo_five = get_field('location_logo_five', 'option');
$location_website_five = get_field('location_website_five', 'option');

// Location Six Fields
$location_details_six = get_field('location_details_six', 'option');
$location_address_six = get_field('location_address_six', 'option');
$location_logo_six = get_field('location_logo_six', 'option');
$location_website_six = get_field('location_website_six', 'option');

// Location Seven Fields
$location_details_seven = get_field('location_details_seven', 'option');
$location_address_seven = get_field('location_address_seven', 'option');
$location_logo_seven = get_field('location_logo_seven', 'option');
$location_website_seven = get_field('location_website_seven', 'option');

// Location Eight Fields
$location_details_eight = get_field('location_details_eight', 'option');
$location_address_eight = get_field('location_address_eight', 'option');
$location_logo_eight = get_field('location_logo_eight', 'option');
$location_website_eight = get_field('location_website_eight', 'option');

// Location Nine Fields
$location_details_nine = get_field('location_details_nine', 'option');
$location_address_nine = get_field('location_address_nine', 'option');
$location_logo_nine = get_field('location_logo_nine', 'option');
$location_website_nine = get_field('location_website_nine', 'option');

// Location Ten Fields
$location_details_ten = get_field('location_details_ten', 'option');
$location_address_ten = get_field('location_address_ten', 'option');
$location_logo_ten = get_field('location_logo_ten', 'option');
$location_website_ten = get_field('location_website_ten', 'option');

// Location Eleven Fields
$location_details_eleven = get_field('location_details_eleven', 'option');
$location_address_eleven = get_field('location_address_eleven', 'option');
$location_logo_eleven = get_field('location_logo_eleven', 'option');
$location_website_eleven = get_field('location_website_eleven', 'option');

// Location Twelve Fields
$location_details_twelve = get_field('location_details_twelve', 'option');
$location_address_twelve = get_field('location_address_twelve', 'option');
$location_logo_twelve = get_field('location_logo_twelve', 'option');
$location_website_twelve = get_field('location_website_twelve', 'option');

// Location Thirteen Fields
$location_details_thirteen = get_field('location_details_thirteen', 'option');
$location_address_thirteen = get_field('location_address_thirteen', 'option');
$location_logo_thirteen = get_field('location_logo_thirteen', 'option');
$location_website_thirteen = get_field('location_website_thirteen', 'option');

// Location Fourteen Fields
$location_details_fourteen = get_field('location_details_fourteen', 'option');
$location_address_fourteen = get_field('location_address_fourteen', 'option');
$location_logo_fourteen = get_field('location_logo_fourteen', 'option');
$location_website_fourteen = get_field('location_website_fourteen', 'option');

// Location Fifteen Fields
$location_details_fifteen = get_field('location_details_fifteen', 'option');
$location_address_fifteen = get_field('location_address_fifteen', 'option');
$location_logo_fifteen = get_field('location_logo_fifteen', 'option');
$location_website_fifteen = get_field('location_website_fifteen', 'option');

// Location Sixteen Fields
$location_details_sixteen = get_field('location_details_sixteen', 'option');
$location_address_sixteen = get_field('location_address_sixteen', 'option');
$location_logo_sixteen = get_field('location_logo_sixteen', 'option');
$location_website_sixteen = get_field('location_website_sixteen', 'option');

// Location Seventeen Fields
$location_details_seventeen = get_field('location_details_seventeen', 'option');
$location_address_seventeen = get_field('location_address_seventeen', 'option');
$location_logo_seventeen = get_field('location_logo_seventeen', 'option');
$location_website_seventeen = get_field('location_website_seventeen', 'option');

// Location Eighteen Fields
$location_details_eighteen = get_field('location_details_eighteen', 'option');
$location_address_eighteen = get_field('location_address_eighteen', 'option');
$location_logo_eighteen = get_field('location_logo_eighteen', 'option');
$location_website_eighteen = get_field('location_website_eighteen', 'option');

// Location Nineteen Fields
$location_details_nineteen = get_field('location_details_nineteen', 'option');
$location_address_nineteen = get_field('location_address_nineteen', 'option');
$location_logo_nineteen = get_field('location_logo_nineteen', 'option');
$location_website_nineteen = get_field('location_website_nineteen', 'option');

// Location Twenty Fields
$location_details_twenty = get_field('location_details_twenty', 'option');
$location_address_twenty = get_field('location_address_twenty', 'option');
$location_logo_twenty = get_field('location_logo_twenty', 'option');
$location_website_twenty = get_field('location_website_twenty', 'option');

// Location Twenty-One Fields
$location_details_twentyone = get_field('location_details_twentyone', 'option');
$location_address_twentyone = get_field('location_address_twentyone', 'option');
$location_logo_twentyone = get_field('location_logo_twentyone', 'option');
$location_website_twentyone = get_field('location_website_twentyone', 'option');


// Location Twenty-Two Fields
$location_details_twentytwo = get_field('location_details_twentytwo', 'option');
$location_address_twentytwo = get_field('location_address_twentytwo', 'option');
$location_logo_twentytwo = get_field('location_logo_twentytwo', 'option');
$location_website_twentytwo = get_field('location_website_twentytwo', 'option');

// Location Twenty-Two Fields
$location_details_twentythree = get_field('location_details_twentythree', 'option');
$location_address_twentythree = get_field('location_address_twentythree', 'option');
$location_logo_twentythree = get_field('location_logo_twentythree', 'option');
$location_website_twentythree = get_field('location_website_twentythree', 'option');


?>
 
<div id="map-block" class="block-map px-5 pb-3 md:pb-0 md:px-0">
    <div class="w-full md:w-2/3 leading-snug py-4 px-5 md:px-11 md:py-8">
        <h3 class="text-xxl text-white"><?php echo $map_heading; ?></h3>
        <div class="text-white pt-4 pb-4"><?php echo $map_content; ?></div>
    </div>
 
    <div class="map relative overflow-hidden">

        <img id="map" class="w-full world-map image-map" src="<?php echo asset('/images/world.png'); ?>" alt="world-map"></img>
        <img class="w-full image-map map-region hide-item" src="<?php echo asset('/images/map-regions/america.png'); ?>" alt="america-map" data-map="america"></img>
        <img class="w-full image-map map-region hide-item" src="<?php echo asset('/images/map-regions/uk.png'); ?>" alt="uk-map" data-map="uk"></img>
        <img class="w-full image-map map-region hide-item" src="<?php echo asset('/images/map-regions/romania.png'); ?>" alt="romania-map" data-map="eu"></img>
        <img class="w-full image-map map-region hide-item" src="<?php echo asset('/images/map-regions/india.png'); ?>" alt="india-map" data-map="india"></img>
        <img class="w-full image-map map-region hide-item" src="<?php echo asset('/images/map-regions/china.png'); ?>" alt="china-map" data-map="china"></img>
        <img class="w-full image-map map-region hide-item" src="<?php echo asset('/images/map-regions/singapore.png'); ?>" alt="singapore-map" data-map="singapore"></img>
        <img class="w-full image-map map-region hide-item" src="<?php echo asset('/images/map-regions/dubai.png'); ?>" alt="dubai-map" data-map="dubai"></img>
        <img class="w-full image-map map-region hide-item" src="<?php echo asset('/images/map-regions/australia.png'); ?>" alt="australia-map" data-map="australia"></img>

         
        <button class="hidden md:!flex items-center gap-[10px] p-[0.25rem] md:absolute md:top-[2rem] md:left-[2.5rem]" data-back-to-overview>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><mask id="a" width="19" height="16" x="4" y="4" maskUnits="userSpaceOnUse" style="mask-type:luminance"><path fill="#fff" fill-rule="evenodd" d="m13.05 18.45-5.678-5.7H22.5v-1.5H7.372l5.678-5.7L12 4.5 4.5 12l7.5 7.5 1.05-1.05Z" clip-rule="evenodd"/></mask><g mask="url(#a)"><path fill="#fff" d="M24 3v18H3V3h21Z"/></g></svg>
            <span class="text-white">Back to Overview</span>
        </button>
 
        <!-- Continent container - America -->
        <div class="continent-marker-container md:hidden h-14 w-full mt-3 mb-4 flex align-center items-center justify-between px-4">
            <div class="text-white">America</div>
            <span class="expand-icon-map-mobile text-grey !text-xl inline-block pb-1 font-semibold leading-4 opacity-60 cursor-pointer" data-continent="america"></span>
        </div>

            <!-- US - Cluster pin -->
            <div class="location-marker-container"> 
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="20" data-y="40" data-x-zoom="-30" data-y-zoom="0" data-location="" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin-cluster">
                            <span class="marker-pin-cluster-icon"></span>
                            <span class="marker-pin-cluster-text">USA Locations</span>      
                        </div>
                    </div>
                </div>
            </div>
            <!-- US - LoneStar Fasteners Houston -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="41.75" data-y-zoom="53" data-location="america-lfh" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-lfh" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_two ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_two['url']); ?>" alt="<?php echo esc_attr($location_logo_two['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_two) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_two as $location_detail): 
                                        $location_information = $location_detail['location_information'];
                                        $phone = $location_detail['phone'];
                                    ?>
                                        <?php if($location_information):?>
                                            <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                                <span class="text-bold">Address</span>
                                                <span class="text-grey"><?php echo $location_information; ?></span>
                                            </p>
                                        <?php endif; ?>
                                        <?php if($phone):?>
                                            <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                                <span class="text-bold">Phone</span>
                                                <span class="text-grey"><?php echo $phone; ?></span>
                                            </p>
                                        <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_two): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_two); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- US - LoneStar Sealing Technologies -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="40.75" data-y-zoom="53.75" data-location="america-lst" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-lst" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_one ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_one['url']); ?>" alt="<?php echo esc_attr($location_logo_one['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_one) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_one as $location_detail): 
                                        $location_information = $location_detail['location_information'];
                                        $phone = $location_detail['phone'];
                                    ?>
                                        <?php if($location_information):?>
                                            <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                                <span class="text-bold">Address</span>
                                                <span class="text-grey"><?php echo $location_information; ?></span>
                                            </p>
                                        <?php endif; ?>
                                        <?php if($phone):?>
                                            <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                                <span class="text-bold">Phone</span>
                                                <span class="text-grey"><?php echo $phone; ?></span>
                                            </p>
                                        <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_one): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_one); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- US - LoneStar Fasteners Test Laboratory Facility -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="42.5" data-y-zoom="53" data-location="america-tlf" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-tlf" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_seventeen ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_seventeen['url']); ?>" alt="<?php echo esc_attr($location_logo_seventeen['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_seventeen) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_seventeen as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                            <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_seventeen): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_seventeen); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- US - Energy Hardware 1 -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="48.5" data-y-zoom="49" data-location="america-eh-1" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-eh-1" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_three ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_three['url']); ?>" alt="<?php echo esc_attr($location_logo_three['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_three) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_three as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_three): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_three); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- US - Energy Hardware 2 -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="46.25" data-y-zoom="53" data-location="america-eh-2" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-eh-2" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_twentyone ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_twentyone['url']); ?>" alt="<?php echo esc_attr($location_logo_twentyone['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_twentyone) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_twentyone as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_twentyone): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_twentyone); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- US - Energy Hardware 3 -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="53.75" data-y-zoom="35.5" data-location="america-eh-3" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-eh-3" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_twentytwo ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_twentytwo['url']); ?>" alt="<?php echo esc_attr($location_logo_twentytwo['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_twentytwo) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_twentytwo as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_twentytwo): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_twentytwo); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- US - Ameribolt 1 -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="46" data-y-zoom="50" data-location="america-ameribolt-1" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-ameribolt-1" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_eighteen ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_eighteen['url']); ?>" alt="<?php echo esc_attr($location_logo_eighteen['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_eighteen) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_eighteen as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_eighteen): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_eighteen); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- US - Ameribolt 2 -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="41.5" data-y-zoom="51.75" data-location="america-ameribolt-2" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-ameribolt-2" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_nineteen ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_nineteen['url']); ?>" alt="<?php echo esc_attr($location_logo_nineteen['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_nineteen) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_nineteen as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_nineteen): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_nineteen); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- US - Ameribolt 3 -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="45" data-y-zoom="53" data-location="america-ameribolt-3" data-map-region="america">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="america-ameribolt-3" data-belongs-to="america">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_twenty ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_twenty['url']); ?>" alt="<?php echo esc_attr($location_logo_twenty['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_twenty) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_twenty as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_twenty): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_twenty); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
 
        <!-- Continent container - Europe -->
        <div class="continent-marker-container md:hidden h-14 w-full mt-3 flex align-center items-center justify-between px-4">
            <div class="text-white">Europe</div>
            <span class="expand-icon-map-mobile text-grey !text-xl inline-block pb-1 font-semibold leading-4 opacity-60 cursor-pointer" data-continent="europe" ></span>
        </div>

            <!-- UK - Cluster pin -->
            <div class="location-marker-container"> 
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="45.5" data-y="29" data-x-zoom="-30" data-y-zoom="0" data-location="" data-map-region="uk">
                    <div class="location-marker">
                        <div class="marker-pin-cluster">
                            <span class="marker-pin-cluster-icon"></span>
                            <span class="marker-pin-cluster-text">UK Locations</span>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Leeds -->
            <div class="location-marker-container"> 
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="52.75" data-y-zoom="58" data-location="leeds" data-map-region="uk">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="leeds" data-belongs-to="europe">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_four ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_four['url']); ?>" alt="<?php echo esc_attr($location_logo_four['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_four) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_four as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_four): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_four); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- UK - Parallel 113 -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="51" data-y-zoom="64.25" data-location="wolverhampton" data-map-region="uk">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="wolverhampton" data-belongs-to="europe">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_five ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_five['url']); ?>" alt="<?php echo esc_attr($location_logo_five['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_five) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_five as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_five): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_five); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- UK - LoneStar Group -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="52.5" data-y-zoom="62" data-location="uk-1" data-map-region="uk">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="uk-1" data-belongs-to="europe">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_six ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_six['url']); ?>" alt="<?php echo esc_attr($location_logo_six['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_six) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_six as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_six): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_six); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Uk - LoneStar Fasteners -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="52.75" data-y-zoom="64" data-location="birmingham-2" data-map-region="uk">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="birmingham-2" data-belongs-to="europe">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_thirteen ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_thirteen['url']); ?>" alt="<?php echo esc_attr($location_logo_thirteen['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_thirteen) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_thirteen as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_thirteen): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_thirteen); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- UK – Oracle Test Laboratory Facility -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="52.25" data-y-zoom="65.5" data-location="birmingham-3" data-map-region="uk">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="birmingham-3" data-belongs-to="europe">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_fifteen ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_fifteen['url']); ?>" alt="<?php echo esc_attr($location_logo_fifteen['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_fifteen) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_fifteen as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_fifteen): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_fifteen); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- UK - Hydrobolt -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="51.75" data-y-zoom="63.25" data-location="birmingham-4" data-map-region="uk">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="birmingham-4" data-belongs-to="europe">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_fourteen ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_fourteen['url']); ?>" alt="<?php echo esc_attr($location_logo_fourteen['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_fourteen) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_fourteen as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_fourteen): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_fourteen); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- UK - Tachart Bolt and Nut -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="53.75" data-y-zoom="58.25" data-location="white-lea" data-map-region="uk">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="white-lea" data-belongs-to="europe">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_sixteen ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_sixteen['url']); ?>" alt="<?php echo esc_attr($location_logo_sixteen['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_sixteen) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_sixteen as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_sixteen): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_sixteen); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Romania -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="54" data-y="36" data-x-zoom="56" data-y-zoom="50.5" data-location="romania" data-map-region="eu">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="romania" data-belongs-to="eu">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_seven ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_seven['url']); ?>" alt="<?php echo esc_attr($location_logo_seven['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_seven) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_seven as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_seven): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_seven); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
 
        <!-- Continent container - Asia -->
        <div class="continent-marker-container asia md:hidden h-14 w-full mt-3 flex align-center items-center justify-between px-4">
            <div class="text-white">Asia</div>
            <span class="expand-icon-map-mobile text-grey !text-xl inline-block pb-1 font-semibold leading-4 opacity-60 cursor-pointer" data-continent="asia"></span>
        </div>
            <!-- India -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="67.5" data-y="56.25" data-x-zoom="73.25" data-y-zoom="20" data-location="india" data-map-region="india">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="india" data-belongs-to="asia">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_eight ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_eight['url']); ?>" alt="<?php echo esc_attr($location_logo_eight['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_eight) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_eight as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_eight): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_eight); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- China  -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="78.5" data-y="47" data-x-zoom="61.75" data-y-zoom="44.5" data-location="china" data-map-region="china">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="china" data-belongs-to="asia">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_nine ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_nine['url']); ?>" alt="<?php echo esc_attr($location_logo_nine['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_nine) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_nine as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_nine): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_nine); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Singapore  -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="74.25" data-y="63" data-x-zoom="58.75" data-y-zoom="25.5" data-location="singapore" data-map-region="singapore">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="singapore" data-belongs-to="asia">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_ten ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_ten['url']); ?>" alt="<?php echo esc_attr($location_logo_ten['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_ten) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_ten as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_ten): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_ten); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <!-- Continent container - Middle East -->
        <div class="continent-marker-container middle-east md:hidden h-14 w-full mt-3 flex align-center items-center justify-between px-4">
            <div class="text-white">Middle East</div>
            <span class="expand-icon-map-mobile text-grey !text-xl inline-block pb-1 font-semibold leading-4 opacity-60 cursor-pointer" data-continent="middle-east"></span>
        </div>

            <!-- Dubai - Cluster pin -->
            <div class="location-marker-container"> 
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="61.5" data-y="50" data-x-zoom="-30" data-y-zoom="0" data-location="" data-map-region="dubai">
                    <div class="location-marker">
                        <div class="marker-pin-cluster">
                            <span class="marker-pin-cluster-icon"></span>
                            <span class="marker-pin-cluster-text">United Arab Emirates Locations</span>      
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dubai - Triplefast Middle East -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="53.5" data-y-zoom="63.5" data-location="dubai-1" data-map-region="dubai">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="dubai-1" data-belongs-to="middle-east">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_eleven ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_eleven['url']); ?>" alt="<?php echo esc_attr($location_logo_eleven['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_eleven) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_eleven as $location_detail): 
                                      $location_information = $location_detail['location_information'];
                                      $phone = $location_detail['phone'];
                                  ?>
                                      <?php if($location_information):?>
                                          <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                              <span class="text-bold">Address</span>
                                              <span class="text-grey"><?php echo $location_information; ?></span>
                                          </p>
                                      <?php endif; ?>
                                      <?php if($phone):?>
                                          <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                              <span class="text-bold">Phone</span>
                                              <span class="text-grey"><?php echo $phone; ?></span>
                                          </p>
                                      <?php endif; ?>
                                  <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_eleven): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_eleven); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Dubai - Triplefast Middle East -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="-30" data-y="0" data-x-zoom="52.5" data-y-zoom="64" data-location="dubai-2" data-map-region="dubai">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="dubai-2" data-belongs-to="middle-east">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_twentythree ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_twentythree['url']); ?>" alt="<?php echo esc_attr($location_logo_twentythree['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_twentythree) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_twentythree as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_twentythree): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_twentythree); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <!-- Continent container - Australia -->
        <div class="continent-marker-container australia md:hidden h-14 w-full mt-3 flex align-center items-center justify-between px-4">
            <div class="text-white">Australia</div>
            <span class="expand-icon-map-mobile text-grey !text-xl inline-block pb-1 font-semibold leading-4 opacity-60 cursor-pointer" data-continent="australia"></span>
        </div>
            <!-- Australia -->
            <div class="location-marker-container">
                <!-- location marker -->
                <div class="marker-location md:absolute" data-x="77.5" data-y="81" data-x-zoom="51.25" data-y-zoom="54" data-location="australia" data-map-region="australia">
                    <div class="location-marker">
                        <div class="marker-pin"></div>
                    </div>
                </div>
                <!-- logo marker -->
                <div class="marker-logo hide-item z-10 mt-3 px-5 py-6 text-black bg-white w-full md:max-w-[26rem] shadow-lg md:absolute md:bottom-[30px] md:right-[30px]" data-location-target="australia" data-belongs-to="australia">
                    <div class="flex justify-between flex justify-between items-center md:border-b-2 border-grey md:pb-3">
                        <?php if( $location_logo_twelve ): ?>
                            <img class="max-h-[100px]" src="<?php echo esc_url($location_logo_twelve['url']); ?>" alt="<?php echo esc_attr($location_logo_twelve['alt']); ?>"></img>
                        <?php endif; ?>
                        <span class="expand-icon-map cursor-pointer hidden md:!block ml-auto mr-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 22.9813L1.01869 24L11.9851 13.0038L22.9813 24L24 22.9813L13.0038 11.9851L24 1.01869L22.9813 0L11.9851 10.9664L1.01869 0L0 1.01869L10.9664 11.9851L0 22.9813Z" fill="#0072BC"/>
                            </svg>
                        </span>
                        <span class="expand-icon-map-mobile md:hidden cursor-pointer" data-mobile-tab></span>
                    </div>
                    <div class="marker-info">
                        <?php if ($location_details_twelve) : ?>
                            <div class="py-4 text-sm leading-snug flex flex-col gap-[30px]">
                                <?php foreach ($location_details_twelve as $location_detail): 
                                    $location_information = $location_detail['location_information'];
                                    $phone = $location_detail['phone'];
                                ?>
                                    <?php if($location_information):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Address</span>
                                            <span class="text-grey"><?php echo $location_information; ?></span>
                                        </p>
                                    <?php endif; ?>
                                    <?php if($phone):?>
                                        <p class="grid grid-cols-[minmax(100px,_2fr)_3fr]">
                                            <span class="text-bold">Phone</span>
                                            <span class="text-grey"><?php echo $phone; ?></span>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($location_website_twelve): ?>
                            <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full" href="<?php echo esc_attr($location_website_twelve); ?>" target="_blank">Website</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>
</div>
