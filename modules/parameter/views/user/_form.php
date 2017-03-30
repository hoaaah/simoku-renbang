<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
            echo $form->field($model, 'group_id')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(\app\models\Groups::find()->all(),'id','name'),
                'options' => ['placeholder' => 'Pilih Peran ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
    ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php 
            echo $form->field($model, 'kode_unit')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(\app\models\RefUnitOrganisasi::find()->all(),'kode_unit','nama_unit'),
                'options' => ['placeholder' => 'Pilih Unit Organisasi ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
    ?>    
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
