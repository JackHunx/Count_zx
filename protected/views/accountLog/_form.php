<?php
/* @var $this AccountLogController */
/* @var $model AccountLog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-log-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'money'); ?>
		<?php echo $form->textField($model,'money',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'use_money'); ?>
		<?php echo $form->textField($model,'use_money',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'use_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_use_money'); ?>
		<?php echo $form->textField($model,'no_use_money',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'no_use_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'collection'); ?>
		<?php echo $form->textField($model,'collection',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'collection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_user'); ?>
		<?php echo $form->textField($model,'to_user'); ?>
		<?php echo $form->error($model,'to_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remark'); ?>
		<?php echo $form->textField($model,'remark',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'addtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addip'); ?>
		<?php echo $form->textField($model,'addip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'addip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->