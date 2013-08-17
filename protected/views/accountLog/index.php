<?php
/* @var $this AccountLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Account Logs',
);

$this->menu=array(
	array('label'=>'Create AccountLog', 'url'=>array('create')),
	array('label'=>'Manage AccountLog', 'url'=>array('admin')),
);
?>

<h1>Account Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
