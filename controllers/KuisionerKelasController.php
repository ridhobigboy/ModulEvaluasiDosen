<?php

namespace app\controllers;

use app\models\KuisionerDosen;
use yii\db\Query;
use yii\web\Controller;
use app\models\JawabanKuisioner;


class KuisionerKelasController extends Controller
{
    public function actionIndex()
    {
        $query = KuisionerKelas::find();

        $pagination = new pagination([
            'defaultPagesize' => 5,
            'totalCount' => $query->Count(),
        ]);
        
        $KuisionerKelas = $query->orderBy('id')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('index', [
            'KuisionerKelas' => $KuisionerKelas,
            'pagination' => $pagination,
        ]);
    }
    private function queryData() 
    {
        return (new query())
            ->select('kuisioner_dosen.pertanyaan,kuisioner_kelas.nim,
            jawaban_kuisioner.jawaban') //columns
            ->from('kuisioner_dosen INNER JOIN kuisioner_kelas on kuisioner_dosen.id = kuisioner_kelas.pertanyaan_id INNER JOIN 
            jawaban_kuisioner on kuisioner_kelas.jawaban_id = jawaban_kuisioner.id') //tables
            //->join('kuisioner_dosen', 'kuisioner_kelas' on 'kuisioner_dosen.id =')
            ->join();
    }
    private function printTable()
    {

    }

}
