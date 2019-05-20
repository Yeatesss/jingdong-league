<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace JingDongLeague;


use JingDongLeague\Union\Kernel\Support\Str;
/**
 * Class Factory.
 *
 * @method static \JingDongLeague\Union\Application            union(array $config)

 */
class Factory
{
    /**
     * @param string $name
     * @param array  $config
     *
     * @return \JingDongLeague\Kernel\ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Str::studly($name);
        $application = "\\JingDongLeague\\{$namespace}\\Application";
        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
