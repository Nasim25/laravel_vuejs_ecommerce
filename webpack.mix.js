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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([

    'public/backend/vendor/pace/pace.min.js',
    'public/backend/vendor/pace/pace-theme-minimal.css',
    'public/backend/vendor/bootstrap/css/bootstrap.css',
    'public/backend/vendor/animate.css/animate.css',
    'public/backend/vendor/magnific-popup/magnific-popup.css',
    'public/backend/stylesheets/css/style.css',

], 'public/css/backend.css').version();

mix.styles([
    
    
    'public/frontend/css/vendor/nice-select.min.css',
    'public/frontend/css/vendor/venobox.min.css',
    'public/frontend/css/vendor/slick.min.css',
    'public/frontend/css/vendor/bootstrap.min.css',
    'public/frontend/css/custom/main.css',
    'public/frontend/css/custom/home-standard.css',
    'public/frontend/css/custom/product-details.css',

], 'public/css/frontend.css').version();

mix.scripts([

    'public/backend/vendor/jquery/jquery-1.12.3.min.js',
    'public/backend/vendor/bootstrap/js/bootstrap.min.js',
    'public/backend/vendor/nano-scroller/nano-scroller.js',
    'public/backend/javascripts/template-script.min.js',
    'public/backend/javascripts/template-init.min.js',
    'public/backend/vendor/chart-js/chart.min.js',
    'public/backend/vendor/magnific-popup/jquery.magnific-popup.min.js',
    'public/backend/javascripts/examples/dashboard.js',

], 'public/js/backend.js').version();

mix.scripts([

    'public/frontend/js/vendor/jquery-1.12.4.min.js',
    'public/frontend/js/vendor/popper.min.js',
    'public/frontend/js/vendor/bootstrap.min.js',
    'public/frontend/js/vendor/nice-select.min.js',
    'public/frontend/js/vendor/venobox.min.js',
    'public/frontend/js/vendor/slick.min.js',
    'public/frontend/js/vendor/countdown.min.js',
    'public/frontend/js/custom/nice-select.js',
    'public/frontend/js/custom/countdown.js',
    'public/frontend/js/custom/venobox.js',
    'public/frontend/js/custom/slick.js',
    'public/frontend/js/custom/main.js',

], 'public/js/frontend.js').version();
