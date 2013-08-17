<?php
/* @var $this CreditTypeController */
/* @var $model CreditType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'credit-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nid'); ?>
		<?php echo $form->textField($model,'nid',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value'); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cycle'); ?>
		<?php echo $form->textField($model,'cycle'); ?>
		<?php echo $form->error($model,'cycle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_times'); ?>
		<?php echo $form->textField($model,'award_times'); ?>
		<?php echo $form->error($model,'award_times'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interval'); ?>
		<?php echo $form->textField($model,'interval'); ?>
		<?php echo $form->error($model,'interval'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remark'); ?>
		<?php echo $form->textArea($model,'remark',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'op_user'); ?>
		<?php echo $form->textField($model,'op_user'); ?>
		<?php echo $form->error($model,'op_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime'); ?>
		<?php echo $form->error($model,'addtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addip'); ?>
		<?php echo $form->textField($model,'addip',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'addip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatetime'); ?>
		<?php echo $form->textField($model,'updatetime'); ?>
		<?php echo $form->error($model,'updatetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateip'); ?>
		<?php echo $form->textField($model,'updateip',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'updateip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->