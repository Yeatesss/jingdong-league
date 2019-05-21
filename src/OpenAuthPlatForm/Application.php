<?php


namespace JingDongLeague\OpenAuthPlatForm;

use JingDongLeague\OpenAuthPlatForm\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author yzc
 *
 * @property \JingDongLeague\OpenAuthPlatForm\OAuth\Request\GenerateCode    generateCode
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        OAuth\ServiceProvider::class
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
