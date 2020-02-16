<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "kuisioner_dosen".
 *
 * @property int $id
 * @property string $pertanyaan
 * @property int $aktif
 * @property int $choices
 *
 * @property KuisionerKelas[] $kuisionerKelas
 */
class KuisionerDosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuisioner_dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pertanyaan', 'aktif', 'choices'], 'required'],
            [['id', 'aktif', 'choices'], 'integer'],
            [['pertanyaan'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pertanyaan' => 'Pertanyaan',
            'aktif' => 'Aktif',
            'choices' => 'Choices',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuisionerKelas()
    {
        return $this->hasMany(KuisionerKelas::className(), ['pertanyaan_id' => 'id']);
    }
}
