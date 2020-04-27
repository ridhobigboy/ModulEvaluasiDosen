<?php

$data = Yii::$app->db->createCommand('select kuisioner_dosen.pertanyaan,kuisioner_kelas.nim,
jawaban_kuisioner.jawaban from kuisioner_dosen INNER JOIN kuisioner_kelas on kuisioner_dosen.id = kuisioner_kelas.pertanyaan_id
INNER JOIN jawaban_kuisioner on kuisioner_kelas.jawaban_id = jawaban_kuisioner.id;');
return $this->render('diagram',[
    'ddiagram' => $data
]);