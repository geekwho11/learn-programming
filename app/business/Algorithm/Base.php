<?php
/**
 * @Author: GeekWho
 * @Date:   2018-07-14 17:58:22
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-07-14 18:49:29
 */

namespace Algorithm;

class Base
{
    /**
     * @var array
     */
    protected static $instances = array();

    /**
     * 获取单例实例.
     *
     */
    public static function instance()
    {
        $class = get_called_class();

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new $class();
        }

        return self::$instances[$class];
    }
}
