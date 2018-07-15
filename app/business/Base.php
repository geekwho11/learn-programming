<?php
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
