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

elixir(function (mix) {
	mix.scripts(['../bower/jquery/dist/jquery.js', '../bower/bootstrap/dist/js/bootstrap.js', 'jquery.metisMenu.js', 'custom.js']);
	mix.less('../bower/bootstrap/less/bootstrap.less', 'resources/assets/css/less.css').sass(['../bower/font-awesome/scss/font-awesome.scss', 'app.scss'], 'resources/assets/css/sass.css');
	mix.styles();
	mix.version()
});
