<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ControllerHelper extends Controller
{
    public function init()
    {
        parent::init();
        $identity = Yii::$app->user->identity;
        $role = !empty($identity) ? $identity->role : '';

        if(empty($identity->role)){
            return $this->redirect(['/site/login']);
        }
    }
}
