<?php


namespace JingDongLeague\Union\Pid;

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
