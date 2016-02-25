var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.sass(['app.scss'], 'public/css/style.css');

    mix.scripts([
        'vendor/components/jquery/jquery.js',
        'vendor/twbs/bootstrap-sass/assets/javascripts/bootstrap.js',
        'resources/assets/js/app.js'
    ], 'public/js/all.js', '.');

    mix.copy([
        'vendor/twbs/bootstrap-sass/assets/fonts/bootstrap',
        'vendor/fortawesome/font-awesome/fonts'
    ], 'public/fonts');

    mix.version(['css/style.css', 'js/all.js']);

});
