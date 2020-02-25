<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JawabanKuisionerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jawaban Kuisioners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jawaban-kuisioner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jawaban Kuisioner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jawaban',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
