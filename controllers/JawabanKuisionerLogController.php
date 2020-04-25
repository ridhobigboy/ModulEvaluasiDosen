<?php

namespace app\controllers;
use yii\web\controller;
use yii\data\pagination;
use app\models\KuisionerKelas;

    class KusionerKelas extends Controller {
        public function actionIndex() {
            $query = KuisionerKelas::find();
            $pagination = new Pagination([

            ]);
        }
    }