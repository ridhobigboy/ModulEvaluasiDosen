<?php
namespace app\controllers;

use yii\web\Controller;

class HighcartController extends Controller 
{
    public function actionindex()
    {
        return $this->render('index');
    }
    public function actionquestion() {
        return $this->render('question');
    }

}