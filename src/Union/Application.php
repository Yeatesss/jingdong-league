<?php


namespace JingDongLeague\Union;

use JingDongLeague\Union\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author yzc
 *
 * @property \JingDongLeague\Union\Goods\Request\JingfenGoods    jingfenGoods
 * @property \JingDongLeague\Union\Goods\Request\CategoryGoods    categoryGoods
 * @property \JingDongLeague\Union\Goods\Request\Goods    goods
 * @property \JingDongLeague\Union\Promotion\Request\Common    common
 * @property \JingDongLeague\Union\Promotion\Request\ByUnionId    byUnionId
 * @property \JingDongLeague\Union\Promotion\Request\BySubUnionId    bySubUnionId
 * @property \JingDongLeague\Union\Order\Request\Order order
 * @property \JingDongLeague\Union\Pid\Request\PositionCreate positionCreate
 * @property \JingDongLeague\Union\Pid\Request\PositionQuery positionQuery

 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Goods\ServiceProvider::class,
        Promotion\ServiceProvider::class,
        Order\ServiceProvider::class,
        Pid\ServiceProvider::class

    ];

    /**
     * Handle dynamic calls.
     *
     * @param string $method
     * @param array  $args
     *
     * @return mixed
     */
//    public function __call($method, $args)
//    {
//        dd($this);
//        return $this->base->$method(...$args);
//    }
}
