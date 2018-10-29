<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class MainController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function myfunc()
    {
	$this->layout = false;
	return 1;
    }
}
