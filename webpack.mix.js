const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/src/scss/mdb.pro.scss', 'public/css/style.min.css');
// mix.postCss('resources/css/mdb.min.css', 'public/css/bootstrap.min.css');

// mix.js('resources/js/mdb.min.js', 'public/js/bootstrap.min.js');

// mix.js('resources/js/style.js', 'public/js').postCss('resources/css/style.css', 'public/css', [
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);
