<?php

 //@var $this yii\web\view 

//use yii\helpers\Html;
//use miloschuman\highcharts\Highcharts;
use dosamigos\highcharts\HighCharts;
//use app\controllers\SiteController;

    $KuisionerKelas = Yii::$app->db->createCommand()
    ->select('pertanyaan,jawaban,nim')
    ->from('kuisioner_kelas k')
    ->join('kuisioner_dosen kd ,jawaban_kuisioner js' ,'pertanyaan_id =id, jawaban_id=id')
    ->where('jawaban_id =: id, pertanyaan_id =:id', array(':id'=>$id))
    ->queryRow();

    foreach()

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

//  echo Highcharts::widget([
//     'options'=>'{
//         "chart": {
//             "plotBackgroundColor": "null",
//             "plotBorderWidth": 0,
//             "plotShadow": "false"
//         },
//         title: {
//             text: "Modul<br>Evaluasi<br>Dosen",
//             align: "center",
//             verticalAlign: "middle",
//             y: 60
//         },
//         tooltip: {
//             pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
//         },
//         accessibility: {
//             point: {
//                 valueSuffix: "%"
//             }
//         },
//         plotOptions: {
//             pie: {
//                 dataLabels: {
//                     enabled: true,
//                     distance: -50,
//                     style: {
//                         fontWeight: "bold",
//                         color: "white"
//                     }
//                 },
//                 startAngle: -90,
//                 endAngle: 90,
//                 center: ["50%", "75%"],
//                 size: "110%"
//             }
//         },
//         series: [{
//             type: "pie",
//             name: "Modul Evaluasi Dosen",
//             innerSize: "50%",
//             data: [
//                 ["Sangat setuju", 58.9],
//                 ["Setuju", 13.29],
//                 ["Ragu-Ragu", 13],
//                 ["Tidak Setuju", 3.78],
//                 ["Sangat Tidak Setuju", 3.42],
//             ]
//         }]
//     }'
//  ]);