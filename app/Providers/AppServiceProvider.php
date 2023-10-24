<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('exists_in_clients', function ($attribute, $value, $parameters, $validator) {

            // Check if the beneficiary_id exists in the users table
            return \App\Models\Client::where('id', $value)->exists();
        });

        Validator::extend('custom_id_exists_in_clients', function ($attribute, $value, $parameters, $validator) {

            // Check if the beneficiary_id exists in the users table
            return \App\Models\Client::where('custom_id', $value)->exists();
        });
        
        Validator::extend('exist_in_stores', function ($attribute, $value, $parameters, $validator) {

            // Check if the beneficiary_id exists in the users table
            return \App\Models\Store::where('id', $value)->exists();
        });

    }
}
