<?php
namespace JingDongLeague;

use \Illuminate\Support\ServiceProvider;


class JingDongServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/jingdong.php' => config_path('jingdong.php'),
        ], 'config');
        
    }
    public function register()
    {

    }
    

}