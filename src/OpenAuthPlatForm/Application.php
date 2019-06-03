<?php


namespace JingDongLeague\OpenAuthPlatForm;

use JingDongLeague\OpenAuthPlatForm\Kernel\ServiceContainer;
use JingDongLeague\OpenAuthPlatForm\Order\ServiceProvider;

/**
 * Class Application.
 *
 * @author yzc
 *
 * @property \JingDongLeague\OpenAuthPlatForm\OAuth\Request\GenerateCode    generateCode
 * @property \JingDongLeague\OpenAuthPlatForm\PromotionSite\Request\Query    promotionSiteQuery
 * @property \JingDongLeague\OpenAuthPlatForm\Order\Request\WithKey    syncOrderWithKey

 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        OAuth\ServiceProvider::class,
        PromotionSite\ServiceProvider::class,
        Promotion\ServiceProvider::class,
        Order\ServiceProvider::class

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
