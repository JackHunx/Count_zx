<?php
/* @var $this AccountLogController */
/* @var $data AccountLog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('money')); ?>:</b>
	<?php echo CHtml::encode($data->money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('use_money')); ?>:</b>
	<?php echo CHtml::encode($data->use_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_use_money')); ?>:</b>
	<?php echo CHtml::encode($data->no_use_money); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('collection')); ?>:</b>
	<?php echo CHtml::encode($data->collection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_user')); ?>:</b>
	<?php echo CHtml::encode($data->to_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remark')); ?>:</b>
	<?php echo CHtml::encode($data->remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	*/ ?>

</div>