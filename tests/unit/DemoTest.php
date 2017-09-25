<?php

use app\componetns\Demo;
use PHPUnit\Framework\Constraint\IsType;
use yii\base\InvalidConfigException;

class DemoTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreateInstance()
    {
        $title = 'This is title!';
        $model = new Demo(['title' => $title]);

        $this->assertInternalType(IsType::TYPE_STRING, $model->title);
        $this->assertEquals($title, $model->title, 'Model not contains title');
    }

    /**
     * @expectedException yii\base\InvalidConfigException
     */
    public function testInit()
    {
        $this->expectException(InvalidConfigException::class);
        new Demo();
    }
}
