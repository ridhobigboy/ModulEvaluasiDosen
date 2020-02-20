<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jawaban_kuisioner".
 *
 * @property int $id
 * @property string $jawaban
 *
 * @property KuisionerKelas[] $kuisionerKelas
 */
class JawabanKuisioner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jawaban_kuisioner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jawaban'], 'required'],
            [['id'], 'integer'],
            [['jawaban'], 'string', 'max' => 20],
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
            'jawaban' => 'Jawaban',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuisionerKelas()
    {
        return $this->hasMany(KuisionerKelas::className(), ['jawaban_id' => 'id']);
    }
}
