<?php

 //@var $this yii\web\view 

//use yii\helpers\Html;
//use miloschuman\highcharts\Highcharts;
use dosamigos\highcharts\HighCharts;
use app\controllers\SiteController;

    $this->title = 'Modul Evaluasi Dosen';

    foreach($grafik as $values){
        $a[0]=($values['id']);
        $c[]=($values['id']);
        $b[]= array ('type'=>'column','id'=>$values['id'], 'data' => array((int)$values['jwb']));
    }

    echo
    Highcharts::widget([
       'clientOptions' => [
          'chart'=>[
             'type'=>'bar'
          ],
          'title' => ['text' => 'Data Pelatihan'],
          'xAxis' => [
             'categories' => ['Jumlah']
          ],
          'yAxis' => [
             'title' => ['text' => 'Jumlah Peserta']
          ],
          'series' => $b
       ]
    ]);