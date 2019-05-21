<?php


namespace JingDongLeague\OpenAuthPlatForm\OAuth;

use JingDongLeague\OpenAuthPlatForm\OAuth\Request\GenerateCode;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['generateCode']) && $app['generateCode'] = function ($app) {
            return new GenerateCode($app);
        };
        
    }
}
