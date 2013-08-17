<?php

/**
 * This is the model class for table "{{account_log}}".
 *
 * The followings are the available columns in table '{{account_log}}':
 * @property string $id
 * @property integer $user_id
 * @property string $type
 * @property string $total
 * @property string $money
 * @property string $use_money
 * @property string $no_use_money
 * @property string $collection
 * @property integer $to_user
 * @property string $remark
 * @property string $addtime
 * @property string $addip
 */
class AccountLog extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return AccountLog the static model class
     */
    public static function model($className = __class__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{account_log}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array(
                'user_id, to_user',
                'numerical',
                'integerOnly' => true),
            array(
                'type',
                'length',
                'max' => 100),
            array(
                'total, collection, addtime',
                'length',
                'max' => 11),
            array(
                'money',
                'length',
                'max' => 20),
            array(
                'use_money, no_use_money',
                'length',
                'max' => 10),
            array(
                'remark',
                'length',
                'max' => 250),
            array(
                'addip',
                'length',
                'max' => 15),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array(
                'id, user_id, type, total, money, use_money, no_use_money, collection, to_user, remark, addtime, addip',
                'safe',
                'on' => 'search'),
            );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'user_id' => 'User',
            'type' => 'Type',
            'total' => 'Total',
            'money' => 'Money',
            'use_money' => 'Use Money',
            'no_use_money' => 'No Use Money',
            'collection' => 'Collection',
            'to_user' => 'To User',
            'remark' => 'Remark',
            'addtime' => 'Addtime',
            'addip' => 'Addip',
            );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('total', $this->total, true);
        $criteria->compare('money', $this->money, true);
        $criteria->compare('use_money', $this->use_money, true);
        $criteria->compare('no_use_money', $this->no_use_money, true);
        $criteria->compare('collection', $this->collection, true);
        $criteria->compare('to_user', $this->to_user);
        $criteria->compare('remark', $this->remark, true);
        $criteria->compare('addtime', $this->addtime, true);
        $criteria->compare('addip', $this->addip, true);

        return new CActiveDataProvider($this, array('criteria' => $criteria, ));
    }
    /**
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function getTenderMange($beginDate, $endDate)
    {
        $criteria = new CDbCriteria;
        //setting conditions
        $criteria->addBetweenCondition('addtime', $beginDate, $endDate);
        $criteria->addCondition('type=:type');
        $criteria->params[':type'] = 'tender_mange';
        $criteria->select = 'user_id,money,addtime';

        return new CActiveDataProvider($this, array(
            'pagination' => false,
            'criteria' => $criteria,
            ));
    }
}
