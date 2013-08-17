<?php
/* @var $this CreditTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Credit Types',
);

$this->menu=array(
	array('label'=>'Create CreditType', 'url'=>array('create')),
	array('label'=>'Manage CreditType', 'url'=>array('admin')),
);
?>

<h1>Credit Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
