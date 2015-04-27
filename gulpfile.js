var elixir = require('laravel-elixir');
//require('laravel-elixir-sass-compass');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less').sass('application.scss');
    mix.styles([
      'app.css',
      'application.css'
      ],
      null, 'public/css'
    );
    mix.version('public/css/all.css');

});
