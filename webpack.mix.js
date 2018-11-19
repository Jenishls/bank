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
   .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/bootstrap/dist/css/bootstrap.css','resources/css/bootstrap.css');

mix.copy('node_modules/jquery/dist/jquery.js','resources/js/jquery.js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.js','resources/js/bootstrap.js');

mix.scripts([
	'resources/js/jquery.js',
	// 'resources/js/extra/popper.js',
	// 'resources/js/bootstrap.js',
	// 'resources/js/extra/match-height.js',
	// 	'resources/js/extra/main.js',
	// 'resources/js/extra/chart.js',
	// 'resources/js/extra/chartist.js',
	// 'resources/js/extra/chartist-legend.js',
	// 'resources/js/extra/jquery.flot.js',
	// 'resources/js/extra/jquery.flot.plot.js',
	// 'resources/js/extra/jquery.flot.spline.js',
	// 'resources/js/extra/jquery.simpleWeather.js',
	// 'resources/js/extra/weather-init.js',
	// 'resources/js/extra/moment.js',
	// 'resources/js/extra/fullcalendar.js',
	// 'resources/js/extra/fullcalendar-init.js',
	// 'resources/js/extra/jquery.js',
	],
	'public/js/all.js');


mix.styles([
	'resources/css/extra/normalize.css',
	'public/css/bootstrap.css',
	'resources/css/extra/font-awesome.css',
	'resources/css/extra/themify.css',
	'resources/css/extra/pe-icon-7-stroke.css',
	'resources/css/extra/cs-skin-elastic.css',
	'resources/css/extra/style.css',
	'resources/css/extra/chatist.css',
	'resources/css/extra/jqmap.css',
	'resources/css/extra/weather-icons.css',
	'resources/css/extra/fullcalendar.css',

	'resources/css/custom.css',
	],'public/css/all.css');