<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property int $id
 * @property string $kode
 * @property string $semester
 * @property int $dosen_id
 * @property int $matakuliah_id
 * @property int $prodi_id
 *
 * @property Dosen $dosen
 * @property Prodi $prodi
 * @property Matakuliah $matakuliah
 * @property KuisionerKelas[] $kuisionerKelas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode', 'semester', 'dosen_id', 'matakuliah_id', 'prodi_id'], 'required'],
            [['id', 'dosen_id', 'matakuliah_id', 'prodi_id'], 'integer'],
            [['kode'], 'string', 'max' => 20],
            [['semester'], 'string', 'max' => 5],
            [['id'], 'unique'],
            [['dosen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['dosen_id' => 'id']],
            [['prodi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['prodi_id' => 'id']],
            [['matakuliah_id'], 'exist', 'skipOnError' => true, 'targetClass' => Matakuliah::className(), 'targetAttribute' => ['matakuliah_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'semester' => 'Semester',
            'dosen_id' => 'Dosen ID',
            'matakuliah_id' => 'Matakuliah ID',
            'prodi_id' => 'Prodi ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDosen()
    {
        return $this->hasOne(Dosen::className(), ['id' => 'dosen_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodi::className(), ['id' => 'prodi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatakuliah()
    {
        return $this->hasOne(Matakuliah::className(), ['id' => 'matakuliah_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuisionerKelas()
    {
        return $this->hasMany(KuisionerKelas::className(), ['kelas_id' => 'id']);
    }
}
