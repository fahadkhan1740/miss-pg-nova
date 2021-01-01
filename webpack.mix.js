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

mix.js('resources/js/en/script.js', 'public/en/js')
    .js('resources/js/ar/script.js', 'public/ar/js')
    .sass('resources/sass/en/style.scss', 'public/en/css')
    .sass('resources/sass/ar/style.scss', 'public/ar/css');

mix.copyDirectory('resources/css/en', 'public/en/css');
mix.copyDirectory('resources/js/en', 'public/en/js');

mix.copyDirectory('resources/css/ar', 'public/ar/css');
mix.copyDirectory('resources/js/ar', 'public/ar/js');

mix.copyDirectory('resources/img', 'public/img');
mix.copyDirectory('resources/fonts', 'public/fonts');
