<?php

namespace yii2module\dashboard\web\controllers;

use yii\web\Controller;
use yii2lab\domain\data\Query;
use yii2lab\notify\domain\entities\SmsEntity;

class DefaultController extends Controller
{
	
	public function actionIndex()
	{
		prr(\App::$domain->file->person->all(),1,1);
		/*$sms = new SmsEntity;
		$sms->address = '777712345678';
		$sms->content = 'wertyu';
		//\App::$domain->notify->sms->sendEntity($sms);
		//\App::$domain->notify->sms->directSendEntity($sms);*/
		return $this->render('index');
	}

}
