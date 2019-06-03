<?php



namespace JingDongLeague\OpenAuthPlatForm\Order;




use JingDongLeague\OpenAuthPlatForm\Order\Request\WithKey;
use JingDongLeague\OpenAuthPlatForm\Promotion\Request\ByUnionId;
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
        !isset($app['syncOrderWithKey']) && $app['syncOrderWithKey'] = function ($app) {
            return new WithKey($app);
        };
        
        
    }
}
