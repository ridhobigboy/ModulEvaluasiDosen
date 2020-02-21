<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KuisionerKelas */

$this->title = 'Create Kuisioner Kelas';
$this->params['breadcrumbs'][] = ['label' => 'Kuisioner Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisioner-kelas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>