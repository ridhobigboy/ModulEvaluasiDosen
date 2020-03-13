<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\KuisionerKelasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuisioner-kelas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'kelas_id') ?>

    <?= $form->field($model, 'pertanyaan_id') ?>

    <?= $form->field($model, 'jawaban_id') ?>

    <?php // echo $form->field($model, 'jawaban_text') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
