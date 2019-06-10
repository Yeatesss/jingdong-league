<?php



namespace JingDongLeague\OpenAuthPlatForm\Promotion;




use JingDongLeague\OpenAuthPlatForm\Promotion\Request\ByUnionId;
use JingDongLeague\OpenAuthPlatForm\Promotion\Request\CouponCodeByUnionId;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        
        !isset($app['byUnionId']) && $app['byUnionId'] = function ($app) {
            return new ByUnionId($app);
        };
        !isset($app['couponCodeByUnionId']) && $app['couponCodeByUnionId'] = function ($app) {
            return new CouponCodeByUnionId($app);
        };
        
    }
}
