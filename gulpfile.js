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
    mix.less('app.less')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .scripts([bootstrapPath + '/js/bootstrap.min.js',
            './resources/assets/bower/jquery/dist/jquery.min.js'],
            'public/js/vendor.js');
});
