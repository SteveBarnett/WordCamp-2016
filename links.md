# HTML

## Images

- Optimise your images and use as few as possible.
- Image optimisation: [Kraken](https://kraken.io/)
- Use the best format for your image: SVGs; JPGs (for photos, images with many colours); PNGs (for images with fewer colours); GIFs (for animations).
- Use the `picture` element and `srcset` to provide the image most suitable for the user's device. You can use [Picturefill](http://scottjehl.github.io/picturefill/) to enable support for `picture` in browsers that don't support it yet.

# CSS

- Use CSS instead of images where possible.
- Serve a base stylesheet to all browsers. Then use Media Queries to serve fancier browsers with fancier styles.
- Be careful with web font usage. More weights and more fonts can mean a heavier, slower, site. Also make sure you supply a suitable fallback font.
- [CSS Compressor](http://csscompressor.com/)
- [grunt-contrib-cssmin](https://github.com/gruntjs/grunt-contrib-cssmin)
- CSS Minification: [cssminifier](http://cssminifier.com/)
- Get CSS stats and look for improvements: [cssstats](http://cssstats.com/) and [stylestats](http://www.stylestats.org/).
- Linting, Hinting, and Minification are also possible using plugins for editors like [Sublime Text](http://www.sublimetext.com/), [Atom](https://atom.io/), [CodeKit](https://incident57.com/codekit/) and [Prepros](https://prepros.io/), or by using a build tool like [Grunt](http://gruntjs.com/) or [Gulp](http://gulpjs.com/).

## Critical CSS

- [Critical Path CSS tools](https://github.com/addyosmani/critical-path-css-tools)

# JavaScript

- Place `script` elements at the bottom of the page, or load them asynchronously by adding the `async` attribute to the `script` tag (this means that the loading of the JavaScript files won't block rendering of the page).
- [JS Compress](https://jscompress.com/)
- [grunt-contrib-uglify](https://github.com/gruntjs/grunt-contrib-uglify)
- Linting, Hinting, and Minification are also possible using plugins for editors like [Sublime Text](http://www.sublimetext.com/), [Atom](https://atom.io/), [CodeKit](https://incident57.com/codekit/) and [Prepros](https://prepros.io/), or by using a build tool like [Grunt](http://gruntjs.com/) or [Gulp](http://gulpjs.com/).

# WordPress

- `wp_enqueue_script` needs async and to be by `</body>`. You can use the [async JS plugin](https://wordpress.org/plugins/async-javascript/), or add [this snippet](http://scottnelle.com/756/async-defer-enqueued-wordpress-scripts/) in your theme.
- [How to add critical CSS to a WordPress site]( https://aarontgrogg.com/blog/2016/01/13/how-to-add-critical-css-to-a-wordpress-site/)
- - [Inlining critical CSS for better web performance](https://gomakethings.com/inlining-critical-css-for-better-web-performance/)
- [Above the fold optimization Plugin](https://wordpress.org/plugins/above-the-fold-optimization/)
- [Scripts to Footer](https://github.com/cferdinandi/gmt-scripts-to-footer)

# Other

- [W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/) is very powerful and does lots of things.
- [PageSpeed module](https://developers.google.com/speed/pagespeed/module/)

# Articles

- [Setting a Performance Budget](https://timkadlec.com/2013/01/setting-a-performance-budget/)
- [Performance as design](http://bradfrost.com/blog/post/performance-as-design/)
- [Responsive Design on a Budget](http://clearleft.com/thinks/98)
- [Front-end performance for web designers and front-end developers](http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers/)
- [Fast Enough](https://timkadlec.com/2014/01/fast-enough/)
- [WordPress Frameworks Compared on Performance](http://chrislema.com/wordpress-frameworks-compared-on-performance/)
- [WPO Stats](https://wpostats.com/)

## Books / long resources

- [Designing for Performance - Weighing Aesthetics and Speed](http://designingforperformance.com/).
- [Google Developers: Performance](https://developers.google.com/web/fundamentals/performance/?hl=en)
- [Front End Performance Optimization](https://teamtreehouse.com/library/front-end-performance-optimization) on treehouse.
