<?php

namespace test\unit\controllers\main;

use \MyCommon\MyClass;
use \app\controllers\MainController;

class MainControllerTest extends \MyCommon\MyClass
//class MainControllerTest extends \CodeCeption\Test\Unit
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
    public function testMyfunc()
    {
        $controller = new MainController(null, null);
        self::assertEquals($controller->myfunc(), 1);
    }

}
