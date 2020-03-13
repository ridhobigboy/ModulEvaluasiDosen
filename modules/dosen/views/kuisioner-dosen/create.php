<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KuisionerDosen */

$this->title = Yii::t('app', 'Create Kuisioner Dosen');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kuisioner Dosens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisioner-dosen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
