<?php
/* @var $this AccountLogController */
/* @var $model AccountLog */

$this->breadcrumbs=array(
	'Account Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountLog', 'url'=>array('index')),
	array('label'=>'Create AccountLog', 'url'=>array('create')),
	array('label'=>'View AccountLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountLog', 'url'=>array('admin')),
);
?>

<h1>Update AccountLog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>