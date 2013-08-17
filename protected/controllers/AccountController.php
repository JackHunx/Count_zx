<?php

class AccountController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout = '//layouts/column2';
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
                'actions' => array('index'),
                'users' => array('*'),
                ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('tenderMange'),
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
        $this->render('index');
    }
    //网站扣除管理费10%
    public function actionTenderMange()
    {
        $model = new AccountLog;
        $dataProvider = $model->getTenderMange('1374453290', time());
        $columns = array(
            array(
                'header' => '用户',
                //'name'=>'user_id',
                'value' => array($this,'getUserName'),
                
                ),
            array(
                'header'=>'真实姓名',
                'value'=>array($this,'getRealName'),
                'footer' => '统计',
            ),
            array(
                'header' => '扣除费用',
                'name' => 'money',
                //'footer'=>$this->getTenderMange(),
                ),
            array(
                'header' => '扣除时间',
                'value' => array($this, 'getDate'),
                'width'=>'20',
                ),
            );
        $this->render('tenderMange', array('dataProvider' => $dataProvider, 'columns' =>
                $columns));
    }
    //get user name
    public function getUserName($data, $row, $c)
    {
        return User::model()->findByPk($data->user_id)->username;
    }
    //get real name 
    public function getRealName($data,$row,$c)
    {
        return User::model()->findByPk($data->user_id)->realname;
            }
    //
    public function getTenderManage()
    {

    }
    //get date
    public function getDate($data, $row, $c)
    {
        return date('Y-m-d H:i:s', $data->addtime);
    }
}
