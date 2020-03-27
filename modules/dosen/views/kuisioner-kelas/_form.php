<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\KuisionerDosen;
use app\models\JawabanKuisioner;

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
    	ArrayHelper::map(KuisionerDosen::find()->all(),'id','pertanyaan'),
    	[
            'prompt'=>'Select Pertanyaan',
            'onchange'=>'
                $.post("index.php?r=branches/lists&id='.'"+$(this).val(),function(data)
                { $("select#departments-branches_branch_id" ).html(data);
            });'
        ]
    ) ?>


    <?= $form->field($model, 'jawaban_id')->dropDownList(
    	ArrayHelper::map(JawabanKuisioner::find()->all(),'id','jawaban'),
    	[
            'prompt'=>'Select Jawaban',
        ]
    ) ?>

    <?= $form->field($model, 'jawaban_text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
