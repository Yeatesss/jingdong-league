<?php


namespace JingDongLeague\Union\Pid;

use JingDongLeague\Union\Pid\Request\pid;
use JingDongLeague\Union\Pid\Request\PositionCreate;
use JingDongLeague\Union\Pid\Request\PositionQuery;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['pid']) && $app['pid'] = function ($app) {
            return new pid($app);
        };
        !isset($app['positionQuery']) && $app['positionQuery'] = function ($app) {
            return new PositionQuery($app);
        };
        !isset($app['positionCreate']) && $app['positionCreate'] = function ($app) {
            return new PositionCreate($app);
        };

    }
}
