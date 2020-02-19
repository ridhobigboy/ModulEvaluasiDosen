<?php
namespace app\models;

use yii\base\Model;

class CHtmlForm extends Model{
    public function rules() {
        return [
            [['Sangat Tidak Setuju','Tidak Setuju','Agak Setuju', 'Setuju', 'Sangat Setuju'],'required'],
            ['']
        ];
    }
}