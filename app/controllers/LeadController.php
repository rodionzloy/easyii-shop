<?php

namespace app\controllers;

use Yii;
use yii\easyii\models\Setting;
use yii\easyii\helpers\Mail;

class LeadController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (Yii::$app->request->post()) {
        	$name = Yii::$app->request->post('name');
        	$phone = Yii::$app->request->post('phone');

            $name  = trim(preg_replace('/[\r\n]+/', '', $name));
            $phone = trim(preg_replace('/[\r\n]+/', '', $phone));

        	if ($name && $phone) {

        		$content = 'Имя: ' . $name . ', Телефон: ' . $phone;

        		$sendTo  = Setting::get('admin_email');
        		$subject = 'Заявка с сайта';
        		$template = '@app/mail/layouts/html';
        		$data = ['content' => $content];

        		Mail::send($sendTo, $subject, $template, $data);
        		return true;
        	}

        } 
        return false;
    }

}
