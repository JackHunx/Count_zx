<?php

class RepaytimeController extends Controller
{
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
                'actions' => array('index'),
                'users' => array('*'),
                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('notRepay'),
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
    public function actionIndex()
    {
        
    }
    public function actionNotRepay()
    {
        //$sql = "select t2.username,t2.realname,t3.repayment_account,t3.repayment_time from {{borrow}} t1,{{user}} t2,{{borrow_repayment}} t3 where t3.borrow_id=t1.id and t1.user_id=t2.user_id and t3.status=0 order by t3.repayment_time ASC";
//        $dataProvider = new CSqlDataProvider($sql, array('pagination' => false, ));
//        $columns = array(
//            array(
//                'header' => '用户名',
//                'name' => 'username',
//                ),
//            array(
//                'header' => '真实姓名',
//                'name' => 'realname',
//                ),
//            array(
//                'header' => '与还款金额',
//                'name' => 'repayment_account',
//                ),
//            array(
//                'header' => '还款时间',
//                //'name'=>'repayment_time',
//                'value' => array($this, 'getDate'),
//                'width' => '20',
//                ),
//            );
//        //$rows = Yii::app()->db->createCommand($sql)->query();
//        //echo "<pre>";
//        //        foreach($rows as $key=>$val)
//        //        {
//        //            print_r($val);
//        //        }
//        $this->render('repay', array('dataProvider' => $dataProvider, 'columns' => $columns));
        // echo"<pre>";
        //        print_r($dataProvider);
        $sql = "select t2.username,t2.phone,t2.realname,t3.repayment_account,t3.repayment_time from {{borrow}} t1,{{user}} t2,{{borrow_repayment}} t3 where t3.borrow_id=t1.id and t1.user_id=t2.user_id and t3.status=0 order by t3.repayment_time ASC";
        $dataProvider = new CSqlDataProvider($sql, array('pagination' => false, ));
        $this->render('index',array('dataProvider' => $dataProvider));
        //        exit();
    }
    public function getDate($data, $row, $c)
    {
        return date('Y-m-d H:i:s', $data['repayment_time']);
    }
    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
    // return the filter configuration for this controller, e.g.:
    return array(
    'inlineFilterName',
    array(
    'class'=>'path.to.FilterClass',
    'propertyName'=>'propertyValue',
    ),
    );
    }

    public function actions()
    {
    // return external action classes, e.g.:
    return array(
    'action1'=>'path.to.ActionClass',
    'action2'=>array(
    'class'=>'path.to.AnotherActionClass',
    'propertyName'=>'propertyValue',
    ),
    );
    }
    */
}
