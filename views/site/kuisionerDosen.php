<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KuisionerDosen */

$this->title = 'Create Kuisioner Dosen';
$this->params['breadcrumbs'][] = ['label' => 'Kuisioner Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisioner-dosen-create">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="kuisioner-dosen-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id')->textInput() ?>

        <?= $form->field($model, 'pertanyaan')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'aktif')->textInput() ?>

        <?= $form->field($model, 'choices')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>