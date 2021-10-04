<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // LINE BOT
        $this->app->bind('line-bot', function ($app, array $parameters) {
            return new LINEBot(
                new CurlHTTPClient(env('LINE_BOT_CHANNEL_ACCESS_TOKEN')),
                ['channelSecret' => env('LINE_BOT_CHANNEL_SECRET')]
            );
        });
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
