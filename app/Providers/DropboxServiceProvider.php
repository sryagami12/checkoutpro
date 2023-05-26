<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;
use League\Flysystem\Filesystem;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Http;


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
        $newToken = cache()->remember('dropbox_token', 13000, function () {
            return Http::asForm()
               ->post('https://api.dropbox.com/oauth2/token', [
                   'refresh_token' => config('services.dropbox.refresh_token'),
                   'client_secret' => config('services.dropbox.app_secret'),
                   'client_id' => config('services.dropbox.app_key'),
                   'grant_type' => 'refresh_token',
               ])
               ->json()['access_token'];
        });

        Storage::extend('dropbox', function (Application $app, array $config) use($newToken) {
            $adapter = new DropboxAdapter(new DropboxClient($newToken));
   
            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }
}
