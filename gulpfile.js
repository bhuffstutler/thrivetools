var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;
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
    var bootstrapPath = './resources/assets/bower/bootstrap/dist';
    mix.less('app.less');

    mix.copy(bootstrapPath + '/fonts', 'public/fonts');

    mix.scripts(['./resources/assets/bower/jquery/dist/jquery.min.js',
        bootstrapPath + '/js/bootstrap.min.js'],
        'public/js/vendor.js');

    mix.version(['css/app.css', 'js/vendor.js']);
});
