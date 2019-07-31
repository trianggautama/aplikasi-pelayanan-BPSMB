<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // config(['app.locale' => 'id']);
	    // \carbon\Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
        config(['app.locale' => 'id']);
        \Carbon\Carbon::setLocale('id');
        // setlocale(LC_TIME, 'id_ID.utf8');

        Schema::defaultStringLength(191);
    }
}
