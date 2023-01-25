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

mix.sass('resources/src/scss/mdb.pro.scss', 'public/css/style.min.css')
    .sass('resources/mdb4/scss/mdb-pro.scss', 'public/css/style2.min.css');

mix.postCss('resources/css/custom_styles.css', 'public/css');

// mix.js('resources/src/js/mdb.pro.js', 'public/js/scripts.min.js');

// mix.js('resources/js/style.js', 'public/js').postCss('resources/css/style.css', 'public/css', [
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);
