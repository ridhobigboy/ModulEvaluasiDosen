<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<div class="row">
    <div class="col-sm-6">
        <?php
        $form = ActiveForm::begin([
            'method' => 'post',
            'action' =>Url::to(['site/question']),
        ]);
        ?>
        <?= $list = [1=> 'ya', 2=> 'tidak'];
        echo $form->field($model,'ketepatan-waktu')->radioList($list)?>
        <?php 
        ActiveForm::end();
        ?>
    </div>
</div>