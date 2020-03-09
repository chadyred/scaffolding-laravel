<?php

namespace App\Providers;

use App\Gestion\PhotoGestion;
use App\Gestion\PhotoGestionInterface;
use App\Repository\Email\Email;
use App\Repository\Email\EmailInterface;
use App\Repository\User\User as UserRepo;
use App\Repository\User\UserInterface as UserRepoInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this
            ->app
            ->bind(
                PhotoGestionInterface::class,
                PhotoGestion::class
            )
        ;

        $this
            ->app
            ->bind(
                EmailInterface::class,
                Email::class
            )
        ;

        $this
            ->app
            ->bind(
                UserRepoInterface::class,
                UserRepo::class
            )
        ;
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
