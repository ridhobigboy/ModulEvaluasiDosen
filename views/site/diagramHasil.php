<?php

/* @var $this yii\web\view */

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

$this->title= 'diagramHasil';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php /*
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
*/ ?>
<?php

echo Highcharts::widget([
   'options'=>'{
    "chart": {
        "plotBackgroundColor": null,
        "plotBorderWidth": 0,
        "plotShadow": false
    },
    "title": {
        "text": "Ketepatan<br>Waktu",
        "align": "center",
        "verticalAlign": "middle",
        "y": 60
    },
    "tooltip": {
        "pointFormat": "{series.name}: <b>{point.percentage:.1f}%</b>"
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
   "series": [{
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
         "plotBackgroundColor": null,
         "plotBorderWidth": 0,
         "plotShadow": false
     },
     "title": {
         "text": "Ketepatan<br>Waktu",
         "align": "center",
         "verticalAlign": "middle",
         "y": 60
     },
     "tooltip": {
         "pointFormat": "{series.name}: <b>{point.percentage:.1f}%</b>"
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
    "series": [{
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