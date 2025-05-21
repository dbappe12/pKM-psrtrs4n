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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

    mix.styles([ 
      'public/template/admin/dist/css/adminlte.min.css',
     'public/template/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
     'public/template/admin/plugins/fontawesome-free/css/all.min.css', 
     'public/template/admin/dist/css/pace-theme-default.min.css', 
     'public/css/custom.css', 
     'public/template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
     'public/plugins/select2/css/select2.min.css', 
     'public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css', 
     'public/plugins/flatpicker/flatpickr.min.css', 
     'public/plugins/datatable/fixedColumns.dataTables.min.css', 
     'public/plugins/datatable/datatable-custom-fixed-coloumns.css', 
   ],'public/css/template.css').version();


   mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css').copy(
      'node_modules/@fortawesome/fontawesome-free/webfonts',
      'public/webfonts'
  );;