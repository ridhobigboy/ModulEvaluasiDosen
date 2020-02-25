<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KuisionerKelasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kuisioner Kelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisioner-kelas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kuisioner Kelas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'kelas_id',
            'pertanyaan_id',
            'jawaban_id',
            //'jawaban_text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
