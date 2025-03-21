import domReady from '@roots/sage/client/dom-ready';
import './footer';
import "./header";
import "./map";
import "./carousel";
;
/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
