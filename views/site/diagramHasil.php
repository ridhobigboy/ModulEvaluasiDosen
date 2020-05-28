<?php

/* @var $this yii\web\view */

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
//use dosamigos\highcharts\HighCharts;
use app\controllers\SiteController;

//use yii\i18n\Formatter;
/*$this->title= 'diagramHasil';
$this->params['breadcrumbs'][] = $this->title; */

/*$this->breadcrumbs=array (
    'Chart'=>array('index'),
    ''
);*/

// $this ->title = 'Modul Evaluasi Dosen';

// foreach($ddiagramHasil as $values){
//         $a[0]= ($values['jawaban_id']);
//         //$c[]= ($values['jawbaan_id']);
//         $b[]= array('type'=> 'column', 'name' =>$values['jawaban_id'], 'data'=>array((int)$values['jawaban']));
// };
 /*
<div id="diagramHasil"></div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">

Highcharts.chart('diagramHasil', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Modul<br>Evaluasi<br>Dosen',
        align: 'center',
        verticalAlign: 'middle',
        y: 60
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%'],
            size: '110%'
        }
    },
    series: [{
        type: 'pie',
        name: 'Modul Evaluasi Dosen',
        innerSize: '50%',
        data: [
            ['Sangat setuju', 58.9],
            ['Setuju', 13.29],
            ['Ragu-Ragu', 13],
            ['Tidak Setuju', 3.78],
            ['Sangat Tidak Setuju', 3.42],
        ]
    }]
});

</script>
*/ 

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

 echo Highcharts::widget([
    'options'=>'{
        "chart": {
            "plotBackgroundColor": "null",
            "plotBorderWidth": 0,
            "plotShadow": "false"
        },
        title: {
            text: "Modul<br>Evaluasi<br>Dosen",
            align: "center",
            verticalAlign: "middle",
            y: 60
        },
        tooltip: {
            pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
        },
        accessibility: {
            point: {
                valueSuffix: "%"
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: "bold",
                        color: "white"
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ["50%", "75%"],
                size: "110%"
            }
        },
        series: [{
            type: "pie",
            name: "Modul Evaluasi Dosen",
            innerSize: "50%",
            data: [
                ["Sangat setuju", 58.9],
                ["Setuju", 13.29],
                ["Ragu-Ragu", 13],
                ["Tidak Setuju", 3.78],
                ["Sangat Tidak Setuju", 3.42],
            ]
        }]
    }'
 ]);