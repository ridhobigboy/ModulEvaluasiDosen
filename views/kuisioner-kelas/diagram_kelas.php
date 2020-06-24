<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use dosamigos\hightchart\Hightcahrt;

foreach ($KuisionerKelas as $kuisionerkelas) {
    $a[0]= ($kuisionerkelas['pertanyaan_id']);
    $b[]= ($kuisionerkelas['jawaban_id']);
    $c[]= array('type'=> 'column', 'KuisionerKelas'=>$kuisionerkelas['pertanyaan_id']);
    // $d[]
    // $e[]
}

echo Highcharts::widget([
    'options'=>'{
    "chart": {
        "plotBackgroundColor": null,
        "plotBorderWidth": 0,
        "plotShadow": false
     },
     "title": {
         "text": "Penguasaan<br>Materi",
         "align": "center",
         "verticalAlign": "middle",
         "y": 60
     },
     "tooltip": {
         "pointFormat": "{series.jawaban}: <b>{point.percentage:.1f}%</b>"
     },
     "accessibility": {
         "point": {
             "valueSuffix": "%"
         }
     },
     "plotOptions": {
         "pie": {
             "dataLabels": {
                 "enabled": true,
                 "distance": -50,
                 "style": {
                     "fontWeight": "bold",
                     "color": "white"
                 }
             },
             "startAngle": -90,
             "endAngle": 90,
             "center": ["50%", "75%"],
             "size": "110%"
         }
     },
    "series" =>$e [{
         "type": "pie",  
         "name": "Modul Evaluasi Dosen",
         "innerSize": "50%",
         "data": [
             ["Sangat setuju", 58.9],
             ["Setuju", 13.29],
             ["Ragu-Ragu", 13],
             ["Tidak Setuju", 3.78],
             ["Sangat Tidak Setuju", 3.42]
         ]
     }]
    }'
 ]);
