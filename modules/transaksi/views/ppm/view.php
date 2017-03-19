<?php

use yii\widgets\DetailView;
use yii\helpers\Url;
use yii\helpers\Html;
use wahyugnc\pdfjs\ViewerPDF;

/* @var $this yii\web\View */
/* @var $model app\models\Ppud */
?>
<div class="ppud-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'puud',
            'puuddetail',
            'no',
            'tahun',
            'tentang',
            'tag',
            'files',
            'tetap_province',
            'tetap_kabkot',
            'tetap_tanggal',
            'user_id',
            'created',
            'updated',
        ],
    ]) ?>

    <?php 
    $ext = explode(".", $model->files);
    $ext = end($ext);
    IF($ext == 'pdf' || $ext == 'PDF'){
        echo \yii2assets\pdfjs\PdfJs::widget([
            'url' => Yii::$app->params['accessibleStaticContentUrl'].'/'.$model->puud.'/'.$model->files,
            'width' => '100%',
            'height' => '800px',
        ]); 
    }ELSE{
        echo Html::a('<i class="glyphicon glyphicon-download"></i> Download', Yii::$app->params['accessibleStaticContentUrl'].'/'.$model->puud.'/'.$model->files, [
            'class' => 'btn btn-lg btn-success',
        ]);
    }
    ?>
</div>