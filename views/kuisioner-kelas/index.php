<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use yii\models\KuisionerKelas;

class KuisionerKelasController extends Controller 
{
    public function actionIndex() 
    {
        $query = KuisionerKelas::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $kuisionerkelas = $query->groupBy('pertanyaan_id','jawaban_id')
                        ->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->all();
        return $this->render('index',[
            'KuisionerKelas'=>$kuisionerkelas,
            'pagination'=> $pagination,
        ]);

    }
}