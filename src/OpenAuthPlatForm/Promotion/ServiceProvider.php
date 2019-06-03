<?php



namespace JingDongLeague\OpenAuthPlatForm\Promotion;




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
        
        
    }
}
