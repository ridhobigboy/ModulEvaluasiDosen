<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\RadioButtonColumn;
use yii\helpers\ArrayHelper;
use app\models\KuisionerKelas;

/* @var $this yii\web\View */
/* @var $model app\models\KuisionerKelas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuisioner-kelas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas_id')->textInput() ?>
    
    <?= $form->field($model, 'pertanyaan_id')->dropDownList(
        ArrayHelper::map(KuisionerKelas::find()->all(),'id','pertanyaan_id'),
        ['prompt'=>'Pilih Pertanyaan']
            )
         ?>


    <?= $form->field($model, 'jawaban_id')->textInput() ?>

    <?= $form->field($model, 'jawaban_text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
