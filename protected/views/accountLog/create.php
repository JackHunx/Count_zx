<?php
/* @var $this AccountLogController */
/* @var $model AccountLog */

$this->breadcrumbs=array(
	'Account Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountLog', 'url'=>array('index')),
	array('label'=>'Manage AccountLog', 'url'=>array('admin')),
);
?>

<h1>Create AccountLog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>