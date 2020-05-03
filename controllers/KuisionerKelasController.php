<?php

namespace app\controllers;

class KuisionerKelasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //return $this->render('index');
        $data = Yii::$app->db->createCommand('select kuisioner_dosen.pertanyaan,kuisioner_kelas.nim,
jawaban_kuisioner.jawaban from kuisioner_dosen INNER JOIN kuisioner_kelas on kuisioner_dosen.id = kuisioner_kelas.pertanyaan_id
INNER JOIN jawaban_kuisioner on kuisioner_kelas.jawaban_id = jawaban_kuisioner.id;

select jawaban_id,
sum(jawaban_id) as jawaban,
from kuisioner_kelas gorup by jawban_id')->queryAll();
return $this->render('diagram',[
    'ddiagram' => $data
]);
    }

}
