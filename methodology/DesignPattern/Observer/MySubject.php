<?php
namespace DesignPattern\Observer;

/**
 *  PHP 观察者模式
 *
 * 目的：
 * 定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新
 *
 * 观察者模式优点：
 * 1、观察者和主题之间的耦合度较小；
 * 2、支持广播通信；
 *
 * 观察者模式的缺点：
 * 1、由于观察者并不知道其它观察者的存在，它可能对改变目标的最终代价一无所知。这可能会引起意外的更新。
 *
 * 观察者模式的适用场景：
 * 1、当一个抽象模型有两个方面，其中一个方面依赖于另一个方面。
 * 2、当对一个对象的改变需要同时改变其它对象，而不知道具体有多少个对象待改变。
 * 3、当一个对象必须通知其它对象，而它又不能假定其它对象是谁。换句话说，你不希望这些对象是紧密耦合的。
 *
 * @author GeekWho <geekwho@xbc.me>
 * @link http://www.phppan.com/2010/09/php-design-pattern-17-observer/
 * @since 2014.9.9
 */
class MySubject implements ISubject
{
    private $observers = array();

    public function attach(IObserver $observer)
    {
        echo __CLASS__ . ' observer  ' . $observer->name . " attached" . PHP_EOL;
        return array_push($this->observers, $observer);
    }

    public function detach(IObserver $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index === false) {
            return false;
        }
        $observer = $this->observers[$index];
        unset($this->observers[$index]);
        echo __CLASS__ . ' observer  ' . $observer->name . " detached" . PHP_EOL;
        return true;
    }

    public function notify()
    {
        if (! is_array($this->observers)) {
            return false;
        }
        foreach ($this->observers as $observer) {
            echo __CLASS__ . ' observer  ' . $observer->name . " notify" . PHP_EOL;
            $observer->update();
        }
    }
}
