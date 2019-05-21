<?php


namespace JingDongLeague\Union\Order;

use JingDongLeague\Union\Order\Request\Order;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['order']) && $app['order'] = function ($app) {
            return new Order($app);
        };
    }
}
