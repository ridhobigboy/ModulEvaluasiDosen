<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\KuisionerKelasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Kuisioner Kelas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuisioner-kelas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Kuisioner Kelas'), ['create'], ['class' => 'btn btn-success']) ?>
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
