<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JawabanKuisioner */

$this->title = 'Update Jawaban Kuisioner: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jawaban Kuisioners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jawaban-kuisioner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
