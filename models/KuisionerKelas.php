<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "kuisioner_kelas".
 *
 * @property int $id
 * @property string $nim
 * @property int $kelas_id
 * @property int $pertanyaan_id
 * @property int $jawaban_id
 * @property string $jawaban_text
 *
 * @property Kelas $kelas
 * @property JawabanKuisioner $jawaban
 * @property KuisionerDosen $pertanyaan
 */
class KuisionerKelas extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuisioner_kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'kelas_id', 'pertanyaan_id', 'jawaban_id', 'jawaban_text'], 'required'],
            [['id', 'kelas_id', 'pertanyaan_id', 'jawaban_id'], 'integer'],
            [['nim'], 'string', 'max' => 10],
            [['jawaban_text'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['kelas_id' => 'id']],
            [['jawaban_id'], 'exist', 'skipOnError' => true, 'targetClass' => JawabanKuisioner::className(), 'targetAttribute' => ['jawaban_id' => 'id']],
            [['pertanyaan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KuisionerDosen::className(), 'targetAttribute' => ['pertanyaan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'kelas_id' => 'Kelas ID',
            'pertanyaan_id' => 'Pertanyaan ID',
            'jawaban_id' => 'Jawaban ID',
            'jawaban_text' => 'Jawaban Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['id' => 'kelas_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJawaban()
    {
        return $this->hasOne(JawabanKuisioner::className(), ['id' => 'jawaban_id'
        ->viatable('kuisioner_kelas',['id'=>'jawaban_id'])
        ]); 
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertanyaan()
    {
        return $this->hasOne(KuisionerDosen::className(), ['id' => 'pertanyaan_id'
        ->viatable('kuisioner_kelas',['id'=>'pertanyaan_id'])
        ]);
    }
}
