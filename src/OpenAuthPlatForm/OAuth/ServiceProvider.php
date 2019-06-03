<?php


namespace JingDongLeague\OpenAuthPlatForm\OAuth;

use JingDongLeague\OpenAuthPlatForm\OAuth\Request\AccessToken;
use JingDongLeague\OpenAuthPlatForm\OAuth\Request\GenerateCode;
use JingDongLeague\OpenAuthPlatForm\OAuth\Request\RefreshAccessToken;
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
        !isset($app['accessToken']) && $app['accessToken'] = function ($app) {
            return new AccessToken($app);
        };
        !isset($app['refreshAccessToken']) && $app['refreshAccessToken'] = function ($app) {
            return new RefreshAccessToken($app);
        };
        
    }
}
