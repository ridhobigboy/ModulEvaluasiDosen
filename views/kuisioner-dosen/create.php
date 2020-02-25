<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KuisionerDosen */

$this->title = 'Create Kuisioner Dosen';
$this->params['breadcrumbs'][] = ['label' => 'Kuisioner Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisioner-dosen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
