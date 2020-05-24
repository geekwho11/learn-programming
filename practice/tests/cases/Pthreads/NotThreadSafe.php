<?php

/**
 * @Author: GeekWho
 * @Date:   2019-02-02 22:29:34
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-02-02 22:32:26
 */
namespace Pthreads;

if (!class_exists('Thread')) {
    return;
}
class NotThreadSafe extends \Thread
{
    /**
     * @see https://www.programcreek.com/2014/02/how-to-make-a-method-thread-safe-in-java/
     */
    public function run()
    {
        return $this->getCount();
    }

    private static $counter = 0;
    public static function getCount()
    {
        return self::$counter++;
    }
}
