<?php

namespace yii2module\dashboard\web\controllers;

use yii\web\Controller;
use yii2lab\domain\data\Query;
use yii2lab\notify\domain\entities\SmsEntity;

class TestController extends Controller
{
	
	public function actionIndex()
	{
		prr('test');
		return $this->render('index');
	}

}
