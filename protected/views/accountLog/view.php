<?php
/* @var $this AccountLogController */
/* @var $model AccountLog */

$this->breadcrumbs=array(
	'Account Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AccountLog', 'url'=>array('index')),
	array('label'=>'Create AccountLog', 'url'=>array('create')),
	array('label'=>'Update AccountLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountLog', 'url'=>array('admin')),
);
?>

<h1>View AccountLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'type',
		'total',
		'money',
		'use_money',
		'no_use_money',
		'collection',
		'to_user',
		'remark',
		'addtime',
		'addip',
	),
)); ?>
