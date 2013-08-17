<?php

class BorrowController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout = '//layouts/test';
    //deafault action
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
            );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array(
                'allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array(''),
                'users' => array('*'),
                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index'),
                'users' => array('@'),
                ),
            array(
                'allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array(),
                'users' => array('admin'),
                ),
            array(
                'deny', // deny all users
                'users' => array('*'),
                ),
            );
    }
    //init
    public function init()
    {
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/style.css');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .
            '/js/amcharts/amcharts.js');
    }
    public function actionIndex()
    {
        //$criteria = new CDbCriteria;
        //
        //        $criteria->select='id,sum(account) total';
        //        $criteria->addCondition("status=:status");
        //        $criteria->params[':status']='3';
        //        $record = Borrow::model()->findAll($criteria);
        //        echo "<pre>";
        //        print_r($record->total);
        // //        exit();
        //        $sql = "select sum(account) total from {{borrow}} where status=3";
        //        //$record = Borrow::model()->findBySql($sql,array(':status'=>'3'));
        //        $rows = Yii::app()->db->createCommand($sql)->query();
        //        echo "<pre>";
        //        //foreach ($rows as $key => $val) {
        ////            print_r($val['total']);
        ////        }
        //        print_r($rows->read());
        //        exit();
        $this->render('index',array('result'=>$this->tongji()));
    }
    //返回借款数据统计
    protected function tongji()
    {
        $_result=array(
            'success_sum'=>0,//成功借款
            'borrow_total'=>0,//借款总额
            'success_repay'=>0,//成功还款总额
            'not_repay'=>0,//未还款总额
            'success_laterepay'=>0,//逾期还款
            'false_laterepay'=>0,//逾期未还款
            
        );
        //成功借款统计
        $sql = "select sum(account) total from {{borrow}} where status=3";
        $row = Yii::app()->db->createCommand($sql)->query();
        $val = $row->read();
        $_result['success_sum'] = $val['total'];
        //逾期未还款
        $sql = " select p1.capital,p1.repayment_yestime,p1.repayment_time,p1.status  from  `{{borrow_repayment}}` as p1 left join `{{borrow}}` as p2 on p1.borrow_id=p2.id where p2.status=3 ";
        $rows = Yii::app()->db->createCommand($sql)->query();
        $result = $rows->readAll();
        //$_result['borrow_total'] = 0;
        foreach ($result as $key => $value) {
            $_result['borrow_total'] += $value['capital']; //借款总额
            if ($value['status'] == 1) {
                $_result['success_repay'] += $value['capital']; //成功还款总额
                if (date("Ymd", $value['repayment_time']) < date("Ymd", $value['repayment_yestime'])) {
                    $_result['success_laterepay'] += $value['capital'];//逾期已还款总额
                }
            }
            if ($value['status'] == 0) {
                $_result['not_repay'] += $value['capital']; //未还款总额
                if (date("Ymd", $value['repayment_time']) < date("Ymd", time())) {
                    $_result['false_laterepay'] += $value['capital'];//逾期未还款总额
                }
            }
        }
        return $_result;
    }

}
