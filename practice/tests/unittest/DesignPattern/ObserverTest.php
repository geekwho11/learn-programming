<?php
/**
 *  观察者模式 测试用例
 */
class ObserverTest extends \PHPUnit\Framework\TestCase
{
    public function testClassExists()
    {
        $tests = [
            '\DesignPattern\Observer\ISubject',
            '\DesignPattern\Observer\IObserver',
            '\DesignPattern\Observer\MySubject',
            '\DesignPattern\Observer\MyObserver',
        ];
        foreach ($tests as $test) {
            $this->assertEquals(
                true,
                class_exists($test) || interface_exists($test),
                "$test class not found"
            );
        }
    }

    public function testObserver()
    {
        $output = 'DesignPattern\Observer\MyObserver init name = observer1
DesignPattern\Observer\MyObserver init name = observer2
DesignPattern\Observer\MySubject observer  observer1 attached
DesignPattern\Observer\MySubject observer  observer2 attached
DesignPattern\Observer\MySubject observer  observer1 notify
DesignPattern\Observer\MyObserver update name = observer1
DesignPattern\Observer\MySubject observer  observer2 notify
DesignPattern\Observer\MyObserver update name = observer2
DesignPattern\Observer\MySubject observer  observer1 detached
DesignPattern\Observer\MySubject observer  observer2 notify
DesignPattern\Observer\MyObserver update name = observer2
';
        $this->expectOutputString($output);
        $subject   = new \DesignPattern\Observer\MySubject();
        $observer1 = new \DesignPattern\Observer\MyObserver('observer1');
        $observer2 = new \DesignPattern\Observer\MyObserver('observer2');
        $subject->attach($observer1);
        $subject->attach($observer2);
        $subject->notify();
        $subject->detach($observer1);
        $subject->notify();
    }
}
