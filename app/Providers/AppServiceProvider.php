<?php

namespace App\Providers;
use App\Config\MenuSidebar;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Menu;
use App\Services\FileUploadService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(FileUploadService::class, function ($app) {
            return new FileUploadService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
     
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $menu= Menu::where('id_menu_induk',0)
                ->get();
                // $result = json_decode($menu, true);
                // $menu= MenuSidebar::render();
       
                $view->with('menu', $menu);
               //$view->with('fotoProfil',    User::find(auth()->user()->id)->field('foto')->getThumb());
             //  $view->with('menu',$result );
            }
         });
    }

    
}