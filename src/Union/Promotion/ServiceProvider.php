<?php



namespace JingDongLeague\Union\Promotion;



use JingDongLeague\Union\Promotion\Request\BySubUnionId;
use JingDongLeague\Union\Promotion\Request\ByUnionId;
use JingDongLeague\Union\Promotion\Request\Common;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['common']) && $app['common'] = function ($app) {
            return new Common($app);
        };
        !isset($app['byUnionId']) && $app['byUnionId'] = function ($app) {
            return new ByUnionId($app);
        };
        !isset($app['bySubUnionId']) && $app['bySubUnionId'] = function ($app) {
            return new BySubUnionId($app);
        };
        
    }
}
