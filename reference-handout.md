## Images

If you’re gathering your images piecemeal, or if they’re being supplied by a client, it’s easy to let image optimization slip by in the greater scheme of meeting deadlines or successfully deploying your site. If we were to make a point of adding image optimization into our pre-production workflow, it would make a huge difference. Here are some strategies and tips to help you keep your images lean and mean!

- Firstly, ask yourself: are all those images really necessary for your site? The first step is to try use as few as possible.
- Use the best format for your image: SVGs; JPGs (for photos, images with many colours); PNGs (for images with fewer colours); GIFs (for animations).
- Use the `picture` element and `srcset` to provide the image most suitable for the user's device. You can use [Picturefill](http://scottjehl.github.io/picturefill/) to enable support for `picture` in browsers that don't support it yet.

## Image optimization

There are a number of options available to us.

- If you have access to a graphics editing program such as Adobe’s Photoshop you could export for screen /web
- There are a number of online sites that allow us to upload files and compress them, just one of the many we could recommend is [Kraken](https://kraken.io/)
- There are a number of PHP scripts we could add to our `functions.php`
- Front-end build tools such as [Grunt](http://gruntjs.com/) and [Gulp](http://gulpjs.com/) also allow us to set up image optimization tasks
- Or a wordpress plugin: [Smush](https://en-za.wordpress.org/plugins/wp-smushit/) and [EWWW](https://wordpress.org/plugins/ewww-image-optimizer/) are the ones that stand out in terms of active installs, rating and recent updates.



## Concat

I’m sure a few of you are familiar with the concept of concatenation. Concatenation is the process of joining one thing to another. Did you know we can concatenate all our JavaScript files together into one file? Same for CSS. This is typically known as concating them. How can we achieve this? There are a few ways.

- You could do it manually! Kinda sucky, but it gets the job done.
- There are a number of PHP solutions out there, this is just one of the many [combine](http://rakaz.nl/code/combine)
- Or maybe a front-end build tool such as Grunt or Gulp, which make it pretty easy to set up concat and minify tasks.
- Or a WordPress plugin like [w3 Total Cache](https://wordpress.org/plugins/w3-total-cache/) is a super powerful one, that can perform a number of optimizations, not just concating

## Minify

Now that all your resources are concatenated into one, it’s time to minify. Minification is the process of removing all unnecessary characters, such as whitespace, line breaks, tabs and comments, without affecting the functionality of the code.

We as developers definitely do need whitespace in order to make our code readable, or in the case of indent style, to show code hierarchies or logical groupings. Machines don’t care how beautifully our code breathes in the text editor though, or about our carefully worded comments… So if it’s production ready, strip it down and save yourself a bunch of kilobytes in the process.

# CSS Minification (and some strategies for keeping it lean from the start):

- Use CSS instead of images where possible.
- Serve a base stylesheet to all browsers. Then use Media Queries to serve fancier browsers with fancier styles.
- Be careful with web font usage. More weights and more fonts can mean a heavier, slower, site. Also make sure you supply a suitable fallback font.
- [CSS Compressor](http://csscompressor.com/)
- [grunt-contrib-cssmin](https://github.com/gruntjs/grunt-contrib-cssmin)
- CSS Minification: [cssminifier](http://cssminifier.com/)

# Javascript Minification

- [JS Compress](https://jscompress.com/)
- [grunt-contrib-uglify](https://github.com/gruntjs/grunt-contrib-uglify)
- Linting, Hinting, and Minification are also possible using plugins for editors like [Sublime Text](http://www.sublimetext.com/), [Atom](https://atom.io/), [CodeKit](https://incident57.com/codekit/) and [Prepros](https://prepros.io/), or by using a build tool like [Grunt](http://gruntjs.com/) or [Gulp](http://gulpjs.com/).


## Eliminate Render Blocking JS and CSS

Once you have your files minified and concated, you can now look at how and where the files get called in to eliminate that pesky PSI suggestion to eliminate ALL THE RENDER BLOCKING THINGS!

### JavaScript

- Place `script` elements at the bottom of the page, or load them asynchronously by adding the `async` attribute to the `script` tag (this means that the loading of the JavaScript files won't block rendering of the page).

### Critical CSS

Eliminating render blocking CSS is a tricky one, and some strategies go against conventional wisdom in a couple of ways.

- Considering "above the fold" content becomes an issue again.
- You have to figure out what the critical CSS is. [Critical Path CSS tools](https://github.com/addyosmani/critical-path-css-tools) can help with this.
- Once you've figured out what your critical CSS is, add it in a style block (if you can get your page under 14KB) for the first render.
- Wut? I thought I was supposed to put all my CSS in one external file?

## WordPress

Here are some Wordpress specific solutions and plugins to help with this:

- `wp_enqueue_script` needs async and to be by `</body>`. You can use the [async JS plugin](https://wordpress.org/plugins/async-javascript/), or add [this snippet](http://scottnelle.com/756/async-defer-enqueued-wordpress-scripts/) in your theme.
- [How to add critical CSS to a WordPress site]( https://aarontgrogg.com/blog/2016/01/13/how-to-add-critical-css-to-a-wordpress-site/)
- - [Inlining critical CSS for better web performance](https://gomakethings.com/inlining-critical-css-for-better-web-performance/)
- [Above the fold optimization Plugin](https://wordpress.org/plugins/above-the-fold-optimization/)


## More FED performance reading and resources

### Articles

- [Setting a Performance Budget](https://timkadlec.com/2013/01/setting-a-performance-budget/)
- [Performance as design](http://bradfrost.com/blog/post/performance-as-design/)
- [Responsive Design on a Budget](http://clearleft.com/thinks/98)
- [Front-end performance for web designers and front-end developers](http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers/)
- [Fast Enough](https://timkadlec.com/2014/01/fast-enough/)
- [WordPress Frameworks Compared on Performance](http://chrislema.com/wordpress-frameworks-compared-on-performance/)
- [WPO Stats](https://wpostats.com/)

### Books / long resources

- [Designing for Performance - Weighing Aesthetics and Speed](http://designingforperformance.com/).
- [Google Developers: Performance](https://developers.google.com/web/fundamentals/performance/?hl=en)
- [Front End Performance Optimization](https://teamtreehouse.com/library/front-end-performance-optimization) on treehouse.
