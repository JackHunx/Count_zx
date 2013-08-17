<?php
/* @var $this CreditTypeController */
/* @var $model CreditType */

$this->breadcrumbs=array(
	'Credit Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CreditType', 'url'=>array('index')),
	array('label'=>'Create CreditType', 'url'=>array('create')),
	array('label'=>'View CreditType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CreditType', 'url'=>array('admin')),
);
?>

<h1>Update CreditType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>