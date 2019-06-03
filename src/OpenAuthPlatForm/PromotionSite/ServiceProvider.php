<?php


namespace JingDongLeague\OpenAuthPlatForm\PromotionSite;

use JingDongLeague\OpenAuthPlatForm\OAuth\Request\AccessToken;
use JingDongLeague\OpenAuthPlatForm\OAuth\Request\GenerateCode;
use JingDongLeague\OpenAuthPlatForm\OAuth\Request\RefreshAccessToken;
use JingDongLeague\OpenAuthPlatForm\PromotionSite\Request\Create;
use JingDongLeague\OpenAuthPlatForm\PromotionSite\Request\Query;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['promotionSiteQuery']) && $app['promotionSiteQuery'] = function ($app) {
            return new Query($app);
        };
        !isset($app['promotionSiteCreate']) && $app['promotionSiteCreate'] = function ($app) {
            return new Create($app);
        };
        
        
    }
}
