<?php
/* @var $this CreditTypeController */
/* @var $model CreditType */

$this->breadcrumbs=array(
	'Credit Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CreditType', 'url'=>array('index')),
	array('label'=>'Create CreditType', 'url'=>array('create')),
	array('label'=>'Update CreditType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CreditType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CreditType', 'url'=>array('admin')),
);
?>

<h1>View CreditType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'nid',
		'value',
		'cycle',
		'award_times',
		'interval',
		'remark',
		'op_user',
		'addtime',
		'addip',
		'updatetime',
		'updateip',
	),
)); ?>
