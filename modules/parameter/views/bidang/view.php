<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RefBidang */
?>
<div class="ref-bidang-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'keterangan',
        ],
    ]) ?>

</div>
