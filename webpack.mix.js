const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.sass('resources/assets/sass/app.scss', 'public/css/app.css');

mix.combine([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/foundation-sites/dist/js/foundation.min.js',
    'node_modules/jquery-autocomplete/jquery.autocomplete.js',
    'resources/assets/js/boardmembers.js'

], 'public/js/app.js');

mix.styles([
    'public/css/app.css',
    'node_modules/jquery-autocomplete/jquery.autocomplete.css'
], 'public/css/app.css');
