<?php


namespace JingDongLeague\Union\Goods;


use JingDongLeague\Union\Goods\Request\BigFieldGoods;
use JingDongLeague\Union\Goods\Request\CategoryGoods;
use JingDongLeague\Union\Goods\Request\Goods;
use JingDongLeague\Union\Goods\Request\JingfenGoods;
use JingDongLeague\Union\Goods\Request\PromotionGoods;
use JingDongLeague\Union\Goods\Request\SeckillGoods;
use JingDongLeague\Union\Goods\Request\StupriceGoods;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['goods']) && $app['goods'] = function ($app) {
            return new Goods($app);
        };
        !isset($app['categoryGoods']) && $app['categoryGoods'] = function ($app) {
            return new CategoryGoods($app);
        };
        !isset($app['bigFieldGoods']) && $app['bigFieldGoods'] = function ($app) {
            return new BigFieldGoods($app);
        };
        !isset($app['stupriceGoods']) && $app['stupriceGoods'] = function ($app) {
            return new StupriceGoods($app);
        };
        !isset($app['seckillGoods']) && $app['seckillGoods'] = function ($app) {
            return new SeckillGoods($app);
        };
        !isset($app['promotionGoods']) && $app['promotionGoods'] = function ($app) {
            return new PromotionGoods($app);
        };
        !isset($app['jingfenGoods']) && $app['jingfenGoods'] = function ($app) {
            return new JingfenGoods($app);
        };
    }
}
