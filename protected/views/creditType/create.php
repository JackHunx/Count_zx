<?php
/* @var $this CreditTypeController */
/* @var $model CreditType */

$this->breadcrumbs=array(
	'Credit Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CreditType', 'url'=>array('index')),
	array('label'=>'Manage CreditType', 'url'=>array('admin')),
);
?>

<h1>Create CreditType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>