<?php
/* @var $this RepaytimeController */

$this->breadcrumbs=array(
	'Repaytime',
);
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'rechargeLog-list',
    //'cssFile' => Yii::app()->baseUrl . '/css/grid_view.css',
    'dataProvider' => $dataProvider,
    'filter' => $model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
    'columns' => array(
            array(
                'header' => '用户名',
                'name' => 'username',
                ),
            array(
                'header' => '真实姓名',
                'name' => 'realname',
                ),
            array(
                'header' => '与还款金额',
                'name' => 'repayment_account',
                ),
            array(
                'header' => '还款时间',
                'headerHtmlOptions'=>array('width'=>120),
                //'name'=>'repayment_time',
                'value' => array($this, 'getDate'),
                
                ),
                array(
                    'header'=>'手机号',
                    'name'=>'phone',
                ),
            ),
    )); ?>