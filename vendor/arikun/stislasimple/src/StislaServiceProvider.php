<?php

namespace Arikun\Stislasimple;
use Illuminate\Support\ServiceProvider;

class StislaServiceProvider extends ServiceProvider{

    public function boot()
    {
        // passwords
        $this->publishes([

            // __DIR__.'/../core/Controllers/HomeController.php' => app_path('Http/Controllers/HomeController.php'),



            __DIR__.'/../core/views/auth/passwords/confirm.blade.php' => resource_path('views/auth/passwords/confirm.blade.php'),
            __DIR__.'/../core/views/auth/passwords/email.blade.php' => resource_path('views/auth/passwords/email.blade.php'),
            __DIR__.'/../core/views/auth/passwords/reset.blade.php' => resource_path('views/auth/passwords/reset.blade.php'),



        //auth

        __DIR__.'/../core/views/auth/login.blade.php' => resource_path('views/auth/login.blade.php'),
        __DIR__.'/../core/views/auth/register.blade.php' => resource_path('views/auth/register.blade.php'),
        __DIR__.'/../core/views/auth/verify.blade.php' => resource_path('views/auth/verify.blade.php'),


        //component

        __DIR__.'/../core/views/components/dcore/card.blade.php' => resource_path('views/components/dcore/card.blade.php'),
        __DIR__.'/../core/views/components/dcore/footer.blade.php' => resource_path('views/components/dcore/footer.blade.php'),
        __DIR__.'/../core/views/components/dcore/head.blade.php' => resource_path('views/components/dcore/head.blade.php'),
        __DIR__.'/../core/views/components/dcore/nav.blade.php' => resource_path('views/components/dcore/nav.blade.php'),
        __DIR__.'/../core/views/components/dcore/script.blade.php' => resource_path('views/components/dcore/script.blade.php'),
        __DIR__.'/../core/views/components/dcore/sidebar.blade.php' => resource_path('views/components/dcore/sidebar.blade.php'),
        __DIR__.'/../core/views/components/footer.blade.php' => resource_path('views/components/footer.blade.php'),
        __DIR__.'/../core/views/components/head.blade.php' => resource_path('views/components/head.blade.php'),
        __DIR__.'/../core/views/components/logo.blade.php' => resource_path('views/components/logo.blade.php'),
        __DIR__.'/../core/views/components/script.blade.php' => resource_path('views/components/script.blade.php'),


        // DASHBOARD

        __DIR__.'/../core/views/Dashboard/index.blade.php' => resource_path('views/Dashboard/index.blade.php'),



        // Layout

        __DIR__.'/../core/views/layouts/app.blade.php' => resource_path('views/layouts/app.blade.php'),
        __DIR__.'/../core/views/layouts/Dashboard.blade.php' => resource_path('views/layouts/Dashboard.blade.php'),



        // OUT
        __DIR__.'/../core/views/home.blade.php' => resource_path('views/home.blade.php'),
        __DIR__.'/../core/views/welcome.blade.php' => resource_path('views/welcome.blade.php'),



        // CONTROLLER

        __DIR__.'/../core/controllers/HomeController.php' => app_path('Http/Controllers/HomeController.php'),
        ]);
    }
    public function register()
    {
        # code...
    }

}



?>