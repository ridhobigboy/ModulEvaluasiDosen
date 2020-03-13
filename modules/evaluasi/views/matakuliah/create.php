<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matakuliah */

$this->title = Yii::t('app', 'Create Matakuliah');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matakuliahs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matakuliah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
