<?php
/* @var $this CreditTypeController */
/* @var $data CreditType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nid')); ?>:</b>
	<?php echo CHtml::encode($data->nid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cycle')); ?>:</b>
	<?php echo CHtml::encode($data->cycle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_times')); ?>:</b>
	<?php echo CHtml::encode($data->award_times); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interval')); ?>:</b>
	<?php echo CHtml::encode($data->interval); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('remark')); ?>:</b>
	<?php echo CHtml::encode($data->remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_user')); ?>:</b>
	<?php echo CHtml::encode($data->op_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatetime')); ?>:</b>
	<?php echo CHtml::encode($data->updatetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateip')); ?>:</b>
	<?php echo CHtml::encode($data->updateip); ?>
	<br />

	*/ ?>

</div>