const mix = require('laravel-mix');

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

mix.ts('resources/ts/app.ts', 'public/js')
    .ts('resources/ts/register.ts','public/js')
    .ts('resources/ts/write.ts','public/js')
    .sass('resources/sass/app.sass', 'public/css')
    .sass('resources/sass/index.sass', 'public/css')
    .sass('resources/sass/write.sass', 'public/css');

mix.copy('node_modules/ionicons', 'public/js/ionicons');
mix.copy('node_modules/normalize.css/normalize.css', 'public/css');
