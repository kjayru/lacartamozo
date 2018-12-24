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

//mix.js('public/js/demo.js', 'public/js');
mix.combine([
    'resources/vendor/jquery/dist/jquery.min.js',
    'resources/vendor/jquery-ui/jquery-ui.min.js',
    'resources/vendor/bootstrap/dist/js/bootstrap.min.js',
    'resources/vendor/jquery-knob/dist/jquery.knob.min.js',
    'resources/vendor/moment/min/moment.min.js',
    'resources/vendor/bootstrap-daterangepicker/daterangepicker.js',
    'resources/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
    'public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    'resources/vendor/jquery-slimscroll/jquery.slimscroll.min.js',
    'resources/vendor/fastclick/lib/fastclick.js',
    'resources/vendor/datatables.net/js/jquery.dataTables.min.js',
    'resources/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js',
    'public/dist/js/adminlte.js'
    ], 'public/js/all.js');

mix.combine([
    'resources/vendor/bootstrap/dist/css/bootstrap.min.css',
    'resources/vendor/Ionicons/css/ionicons.min.css',
    'public/dist/css/skins/_all-skins.min.css',
    'resources/vendor/morris.js/morris.css',
    'resources/vendor/jvectormap/jquery-jvectormap.css',
    'resources/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
    'resources/vendor/bootstrap-daterangepicker/daterangepicker.css',
    'public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    'resources/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css',
    'public/dist/css/AdminLTE.css',
    ],'public/css/library.css');

    
