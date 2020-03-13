<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JawabanKuisioner */

$this->title = Yii::t('app', 'Create Jawaban Kuisioner');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jawaban Kuisioners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jawaban-kuisioner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
