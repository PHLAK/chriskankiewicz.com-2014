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

    mix.browserify(['app.js'], 'public/js/app.js');

    mix.copy([
        'node_modules/bootstrap-sass/assets/assets/fonts/bootstrap',
        'node_modules/bootstrap-sass/assets/font-awesome/fonts'
    ], 'public/fonts');

    // mix.version(['css/app.css', 'js/app.js']);

    mix.browserSync({
        proxy: 'chriskankiewicz.com.dev'
    });

});
