<?php
namespace app\models;

use yii\base\Model;

class QuestionForm extends Model{
    const STATUS_APPROVED =1;
    //const STATUS_APPROVED =2;

    public static function getStatusList() {
        return [
            self::STATUS_APPROVED => 'ya',
            self::STATUS_APPROVED => 'tidak',
        ];
    }
}