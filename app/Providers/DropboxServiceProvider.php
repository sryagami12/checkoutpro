<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Extendemos el Storage de Laravel agregando nuestro nuevo driver.
        Storage::extend('dropbox', function ($app, $config) { 
            $client = new DropboxClient(
                $config['authorizationToken'] // Hacemos referencia al hash
            );
            return new Filesystem(new DropboxAdapter($client)); 
        });
    }
}
