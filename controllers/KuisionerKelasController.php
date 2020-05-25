<?php

namespace app\controllers;

use app\models\KuisionerDosen;
use yii\db\Query;
use yii\web\Controller;
use app\models\JawabanKuisioner;

class KuisionerKelasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // $db = new Connection([
        //     'dsn' => 'mysql:host=localhost;dbname=DosenAis',
        //     'username' => 'root',
        //     'password' => '',
        //     'cahrset' => 'utf8',
        //     'tablePrefix' => 
        // ]);
        // $db = \Yii::$app->db;

        $data = $this->queryData();

        return $this->printTable($data);
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
