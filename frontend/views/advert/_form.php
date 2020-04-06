<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;    // !!!-!!! dodano

/* @var $this yii\web\View */
/* @var $model frontend\models\Advert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advert-form">

  <?php $form = ActiveForm::begin([          // !!!-!!! naj bo multipart ! pomembno
		'options'=>['enctype'=>'multipart/form-data']]); ?>
		
	<?= $form->field($model, 'naslov')->textInput(['maxlength' => true]) ?>
	
	<!-- dodamo tegale, za sliko takoj po naslovu -->
	<?= $form->field($model, 'image')->widget(FileInput::classname(), [
		'options' => ['accept' => 'image/*'],
		'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png','svg'],'showUpload' => false,],
          ]);   ?>
		  
	<?= $form->field($model, 'povzetek')->textInput(['maxlength' => true]) ?>
		  
	<?= $form->field($model, 'avtor')->textInput() ?>
		  
	<div class="form-group">
		<?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>    </div>    
		
	<?php ActiveForm::end(); 
  ?>
  
</div>