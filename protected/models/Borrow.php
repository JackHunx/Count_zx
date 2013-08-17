<?php

/**
 * This is the model class for table "{{borrow}}".
 *
 * The followings are the available columns in table '{{borrow}}':
 * @property string $id
 * @property integer $site_id
 * @property integer $user_id
 * @property string $name
 * @property integer $status
 * @property integer $order
 * @property integer $hits
 * @property string $litpic
 * @property string $flag
 * @property integer $is_vouch
 * @property string $type
 * @property integer $view_type
 * @property string $vouch_award
 * @property string $vouch_user
 * @property string $vouch_account
 * @property integer $vouch_times
 * @property string $source
 * @property string $publish
 * @property string $customer
 * @property string $number_id
 * @property string $verify_user
 * @property string $verify_time
 * @property string $verify_remark
 * @property integer $repayment_user
 * @property string $forst_account
 * @property string $repayment_account
 * @property string $monthly_repayment
 * @property string $repayment_yesaccount
 * @property integer $repayment_yesinterest
 * @property string $repayment_time
 * @property string $repayment_remark
 * @property string $success_time
 * @property string $end_time
 * @property string $payment_account
 * @property string $each_time
 * @property string $use
 * @property string $time_limit
 * @property string $style
 * @property string $account
 * @property string $account_yes
 * @property string $tender_times
 * @property string $apr
 * @property string $lowest_account
 * @property string $most_account
 * @property string $valid_time
 * @property string $award
 * @property string $part_account
 * @property string $funds
 * @property string $is_false
 * @property string $open_account
 * @property string $open_borrow
 * @property string $open_tender
 * @property string $open_credit
 * @property string $content
 * @property string $addtime
 * @property string $addip
 */
class Borrow extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Borrow the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{borrow}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, user_id, status, order, hits, is_vouch, view_type, vouch_times, repayment_user, repayment_yesinterest', 'numerical', 'integerOnly'=>true),
			array('name, litpic, verify_remark', 'length', 'max'=>255),
			array('flag, type, vouch_account, source, publish, number_id, verify_time, forst_account, repayment_account, monthly_repayment, repayment_yesaccount, repayment_time, success_time, end_time, payment_account, each_time, use, time_limit, style, account, lowest_account, most_account, valid_time, award, part_account, funds, is_false, open_account, open_borrow, open_tender, open_credit, addtime, addip', 'length', 'max'=>50),
			array('vouch_award', 'length', 'max'=>40),
			array('vouch_user', 'length', 'max'=>100),
			array('customer, verify_user, tender_times', 'length', 'max'=>11),
			array('repayment_remark', 'length', 'max'=>250),
			array('account_yes', 'length', 'max'=>10),
			array('apr', 'length', 'max'=>18),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, user_id, name, status, order, hits, litpic, flag, is_vouch, type, view_type, vouch_award, vouch_user, vouch_account, vouch_times, source, publish, customer, number_id, verify_user, verify_time, verify_remark, repayment_user, forst_account, repayment_account, monthly_repayment, repayment_yesaccount, repayment_yesinterest, repayment_time, repayment_remark, success_time, end_time, payment_account, each_time, use, time_limit, style, account, account_yes, tender_times, apr, lowest_account, most_account, valid_time, award, part_account, funds, is_false, open_account, open_borrow, open_tender, open_credit, content, addtime, addip', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'site_id' => 'Site',
			'user_id' => 'User',
			'name' => 'Name',
			'status' => 'Status',
			'order' => 'Order',
			'hits' => 'Hits',
			'litpic' => 'Litpic',
			'flag' => 'Flag',
			'is_vouch' => 'Is Vouch',
			'type' => 'Type',
			'view_type' => 'View Type',
			'vouch_award' => 'Vouch Award',
			'vouch_user' => 'Vouch User',
			'vouch_account' => 'Vouch Account',
			'vouch_times' => 'Vouch Times',
			'source' => 'Source',
			'publish' => 'Publish',
			'customer' => 'Customer',
			'number_id' => 'Number',
			'verify_user' => 'Verify User',
			'verify_time' => 'Verify Time',
			'verify_remark' => 'Verify Remark',
			'repayment_user' => 'Repayment User',
			'forst_account' => 'Forst Account',
			'repayment_account' => 'Repayment Account',
			'monthly_repayment' => 'Monthly Repayment',
			'repayment_yesaccount' => 'Repayment Yesaccount',
			'repayment_yesinterest' => 'Repayment Yesinterest',
			'repayment_time' => 'Repayment Time',
			'repayment_remark' => 'Repayment Remark',
			'success_time' => 'Success Time',
			'end_time' => 'End Time',
			'payment_account' => 'Payment Account',
			'each_time' => 'Each Time',
			'use' => 'Use',
			'time_limit' => 'Time Limit',
			'style' => 'Style',
			'account' => 'Account',
			'account_yes' => 'Account Yes',
			'tender_times' => 'Tender Times',
			'apr' => 'Apr',
			'lowest_account' => 'Lowest Account',
			'most_account' => 'Most Account',
			'valid_time' => 'Valid Time',
			'award' => 'Award',
			'part_account' => 'Part Account',
			'funds' => 'Funds',
			'is_false' => 'Is False',
			'open_account' => 'Open Account',
			'open_borrow' => 'Open Borrow',
			'open_tender' => 'Open Tender',
			'open_credit' => 'Open Credit',
			'content' => 'Content',
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('order',$this->order);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('is_vouch',$this->is_vouch);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('view_type',$this->view_type);
		$criteria->compare('vouch_award',$this->vouch_award,true);
		$criteria->compare('vouch_user',$this->vouch_user,true);
		$criteria->compare('vouch_account',$this->vouch_account,true);
		$criteria->compare('vouch_times',$this->vouch_times);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('publish',$this->publish,true);
		$criteria->compare('customer',$this->customer,true);
		$criteria->compare('number_id',$this->number_id,true);
		$criteria->compare('verify_user',$this->verify_user,true);
		$criteria->compare('verify_time',$this->verify_time,true);
		$criteria->compare('verify_remark',$this->verify_remark,true);
		$criteria->compare('repayment_user',$this->repayment_user);
		$criteria->compare('forst_account',$this->forst_account,true);
		$criteria->compare('repayment_account',$this->repayment_account,true);
		$criteria->compare('monthly_repayment',$this->monthly_repayment,true);
		$criteria->compare('repayment_yesaccount',$this->repayment_yesaccount,true);
		$criteria->compare('repayment_yesinterest',$this->repayment_yesinterest);
		$criteria->compare('repayment_time',$this->repayment_time,true);
		$criteria->compare('repayment_remark',$this->repayment_remark,true);
		$criteria->compare('success_time',$this->success_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('payment_account',$this->payment_account,true);
		$criteria->compare('each_time',$this->each_time,true);
		$criteria->compare('use',$this->use,true);
		$criteria->compare('time_limit',$this->time_limit,true);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('account_yes',$this->account_yes,true);
		$criteria->compare('tender_times',$this->tender_times,true);
		$criteria->compare('apr',$this->apr,true);
		$criteria->compare('lowest_account',$this->lowest_account,true);
		$criteria->compare('most_account',$this->most_account,true);
		$criteria->compare('valid_time',$this->valid_time,true);
		$criteria->compare('award',$this->award,true);
		$criteria->compare('part_account',$this->part_account,true);
		$criteria->compare('funds',$this->funds,true);
		$criteria->compare('is_false',$this->is_false,true);
		$criteria->compare('open_account',$this->open_account,true);
		$criteria->compare('open_borrow',$this->open_borrow,true);
		$criteria->compare('open_tender',$this->open_tender,true);
		$criteria->compare('open_credit',$this->open_credit,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}