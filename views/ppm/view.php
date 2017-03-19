<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tfiles */
?>
<div class="tfiles-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'bidang_id',
            'category_id',
            'user_dest',
            'no',
            'tahun',
            'tentang',
            'tag',
            'files',
            'user_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
