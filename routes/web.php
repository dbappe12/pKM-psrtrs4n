<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\PermissionController;
//use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RoleController_old;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\admin\MasterUserController;
use App\Http\Controllers\admin\GaleriBackandController;
use App\Http\Controllers\admin\SkpdController;
use App\Http\Controllers\admin\YoutubeController;
use App\Http\Controllers\admin\InfografisController;
use App\Http\Controllers\admin\BeritaBackandController;
use App\Http\Controllers\admin\TransparasiAnggaranController;
use App\Http\Controllers\admin\PopupController;
use App\Http\Controllers\admin\LakipController;


use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\SliderController;



use App\Http\Controllers\MenuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\AkuntabilitasBatanghariController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\GaleriController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\admin\PageAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;





//firbase

//Home
Route::controller(PageController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/page/{slug}', 'page')->name('page');
    Route::get('/downloadFile/{file}', 'downloadFile')->name('downloadFile');
    Route::get('/show/{file}', 'show')->name('show');
    Route::get('/tampil/{slug}', 'tampil')->name('tampil');
    Route::get('infografis', 'index')->name('index');
});
//Galeri
Route::controller(GaleriController::class)->group(function() {
    Route::get('galeri-foto', 'galeri_foto')->name('galeri_foto');
 
    Route::get('galeri-video', 'galeri_video')->name('galeri_video');
    Route::get('website-skpd', 'website_skpd')->name('website_skpd');
});

//BERITA
Route::controller(BeritaController::class)->group(function() {
    Route::get('baca/{id}/{title}/{tanggal}', 'baca')->name('baca');
    Route::get('read/{id}/{title}', 'read')->name('read');
    Route::get('berita', 'index')->name('index');
});
Route::get('/login', function () {
   return redirect()->route('login');
})->name('index');

//Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/view/{file}', function ($file) {
   $myFile = public_path("frontend/infografis/file/".$file);
       
        
   return response()->file($myFile,['content-type'=>'application/pdf']);
});


//Anggaran
// Route::controller(AkuntabilitasBatanghariController::class)->group(function() {
//    Route::get('akuntabilitas-batanghari', 'index')->name('akuntabilitas.index');
// });
Route::get('akuntabilitas-batanghari', [AkuntabilitasBatanghariController::class, 'index'])->name('akuntabilitas.index');
Route::get('lakip', [AkuntabilitasBatanghariController::class, 'lakip'])->name('lakip.lakip');
Route::get('lakip_skpd', [AkuntabilitasBatanghariController::class, 'lakip_skpd'])->name('lakip.lakip_skpd');
// Route::get('/', function () {
//    return view('frontend.dashbord.home', ['name' => 'James']);
// });

Route::get('/ade', [FormController::class, 'menu'])->name('ade');

Auth::routes([
   'register'  => false,
   'reset'     => false,
   'confirm'   => false
]);




Route::get('uploud', [PegawaiController::class, 'uploud'])->name('uploud');
Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->group(function () {
   Route::get('/', [DashboardController::class, 'index'])->name('admin');
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
   
   Route::resource('user', MasterUserController::class);
   Route::controller(MasterUserController::class)->group(function () {
      // Route::get('user', 'index')->middleware(['permission:read user'])->name('user.index');
      Route::get('profile', 'profile')->name('profile.index');
      Route::put('user/profile/foto', 'ubah_foto')->name('profile.foto.ubah');
      // Route::post('user', 'store')->middleware(['permission:create user'])->name('user.store');
      // Route::get('user/show', 'show')->middleware(['permission:read user'])->name('user.show');
      // Route::put('user', 'update')->middleware(['permission:update user'])->name('user.update');
      // Route::delete('user', 'destroy')->middleware(['permission:delete user'])->name('user.destroy');
   });

   Route::controller(RoleController_old::class)->group(function () {
      Route::get('role', 'index')->middleware(['permission:read role'])->name('role.index');
      Route::post('role', 'store')->middleware(['permission:create role'])->name('role.store');
      Route::post('role/show', 'show')->middleware(['permission:read role'])->name('role.show');
      Route::put('role', 'update')->middleware(['permission:update role'])->name('role.update');
      Route::delete('role', 'destroy')->middleware(['permission:delete role'])->name('role.destroy');
   });

   // Route::controller(PermissionController::class)->group(function () {
   //    Route::get('permission', 'index')->middleware(['permission:read permission'])->name('permission.index');
   //    Route::post('permission', 'store')->middleware(['permission:create permission'])->name('permission.store');
   //    Route::post('permission/show', 'show')->middleware(['permission:read permission'])->name('permission.show');
   //    Route::put('permission', 'update')->middleware(['permission:update permission'])->name('permission.update');
   //    Route::delete('permission', 'destroy')->middleware(['permission:delete permission'])->name('permission.destroy');
   //    Route::get('permission/reload', 'reloadPermission')->middleware(['permission:create permission'])->name('permission.reload');
   // });


   Route::controller(SettingController::class)->group(function () {
      Route::get('setting', 'index')->middleware(['permission:read setting'])->name('setting.index');
      Route::post('setting', 'store')->middleware(['permission:create setting'])->name('setting.store');
      Route::post('setting/show', 'show')->middleware(['permission:read setting'])->name('setting.show');
      Route::put('setting', 'update')->middleware(['permission:update setting'])->name('setting.update');
      Route::delete('setting', 'destroy')->middleware(['permission:delete setting'])->name('setting.destroy');
   });

   Route::controller(AuthController::class)->group(function () {
      Route::put('password-ubah', 'ubahPassword')->name('password.ubah');
   });

   // Route::controller(MenuController::class)->group(function () {
   //    Route::get('menu/{submenu}', 'submenu')->name('menu.submenu');
    
   // });

   Route::resources([
      'roles' => RoleController_old::class,
      'galeri' => GaleriBackandController::class,
      'skpd' => SkpdController::class,
      'news' => NewsController::class, 
      'permission' => PermissionController::class, 
      'anggaran' => TransparasiAnggaranController::class, 
      'front' => PageAdminController::class, 
      'popup' => PopupController::class, 
      'lakip' => LakipController::class, 
      

      
      
      'youtube' => YoutubeController::class, 
      'infografis' => InfografisController::class,  
      'form' => FormController::class,
      'pegawai' => PegawaiController::class,
      'slider' => SliderController::class,
      'menu' => MenuController::class,
   ]);



   // Route::controller(PegawaiController::class)->group(function () {
   //    Route::get('pegawai', 'index')->middleware(['permission:read pegawai'])->name('pegawai.index');
   //    Route::post('pegawai', 'store')->middleware(['permission:create pegawai'])->name('pegawai.store');
   //    Route::post('pegawai/show', 'show')->middleware(['permission:read pegawai'])->name('pegawai.show');
   //    Route::put('pegawai', 'update')->middleware(['permission:update pegawai'])->name('pegawai.update');
   //    Route::delete('pegawai', 'destroy')->middleware(['permission:delete pegawai'])->name('pegawai.destroy');
     
   // });
   // Route::get('form', [FormController::class, 'index'])->name('form.index');

   // Route::controller(FormController::class)->group(function () {
   //    Route::get('form', 'index')->middleware(['permission:read form'])->name('form.index');
   //    Route::post('form', 'store')->middleware(['permission:create form'])->name('form.store');
   //    Route::post('form/show', 'show')->middleware(['permission:read form'])->name('form.show');
   //    Route::put('form', 'update')->middleware(['permission:update form'])->name('form.update');
   //    Route::delete('form', 'destroy')->middleware(['permission:delete form'])->name('pegawai.destroy');
   
   // });

   

  




});
