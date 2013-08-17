<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $user_id
 * @property integer $type_id
 * @property integer $order
 * @property string $purview
 * @property string $username
 * @property string $password
 * @property string $paypassword
 * @property integer $islock
 * @property integer $invite_userid
 * @property string $invite_money
 * @property integer $real_status
 * @property string $card_type
 * @property string $card_id
 * @property string $card_pic1
 * @property string $card_pic2
 * @property string $nation
 * @property string $realname
 * @property string $integral
 * @property integer $status
 * @property integer $avatar_status
 * @property integer $email_status
 * @property integer $phone_status
 * @property integer $video_status
 * @property integer $scene_status
 * @property string $email
 * @property string $sex
 * @property string $litpic
 * @property string $tel
 * @property string $phone
 * @property string $qq
 * @property string $wangwang
 * @property string $question
 * @property string $answer
 * @property string $birthday
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $address
 * @property string $remind
 * @property string $privacy
 * @property integer $logintime
 * @property string $addtime
 * @property string $addip
 * @property string $uptime
 * @property string $upip
 * @property string $lasttime
 * @property string $lastip
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type_id, order, islock, invite_userid, real_status, status, avatar_status, email_status, phone_status, video_status, scene_status, logintime', 'numerical', 'integerOnly'=>true),
			array('purview, wangwang, answer', 'length', 'max'=>100),
			array('username, email', 'length', 'max'=>30),
			array('password, paypassword, card_id, tel, phone, qq, addtime, addip, uptime, upip, lasttime', 'length', 'max'=>50),
			array('invite_money, card_type, nation, integral, sex, question', 'length', 'max'=>10),
			array('card_pic1, card_pic2', 'length', 'max'=>150),
			array('realname, province, city, area, lastip', 'length', 'max'=>20),
			array('litpic', 'length', 'max'=>250),
			array('birthday', 'length', 'max'=>11),
			array('address', 'length', 'max'=>200),
			array('remind, privacy', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, type_id, order, purview, username, password, paypassword, islock, invite_userid, invite_money, real_status, card_type, card_id, card_pic1, card_pic2, nation, realname, integral, status, avatar_status, email_status, phone_status, video_status, scene_status, email, sex, litpic, tel, phone, qq, wangwang, question, answer, birthday, province, city, area, address, remind, privacy, logintime, addtime, addip, uptime, upip, lasttime, lastip', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'type_id' => 'Type',
			'order' => 'Order',
			'purview' => 'Purview',
			'username' => 'Username',
			'password' => 'Password',
			'paypassword' => 'Paypassword',
			'islock' => 'Islock',
			'invite_userid' => 'Invite Userid',
			'invite_money' => 'Invite Money',
			'real_status' => 'Real Status',
			'card_type' => 'Card Type',
			'card_id' => 'Card',
			'card_pic1' => 'Card Pic1',
			'card_pic2' => 'Card Pic2',
			'nation' => 'Nation',
			'realname' => 'Realname',
			'integral' => 'Integral',
			'status' => 'Status',
			'avatar_status' => 'Avatar Status',
			'email_status' => 'Email Status',
			'phone_status' => 'Phone Status',
			'video_status' => 'Video Status',
			'scene_status' => 'Scene Status',
			'email' => 'Email',
			'sex' => 'Sex',
			'litpic' => 'Litpic',
			'tel' => 'Tel',
			'phone' => 'Phone',
			'qq' => 'Qq',
			'wangwang' => 'Wangwang',
			'question' => 'Question',
			'answer' => 'Answer',
			'birthday' => 'Birthday',
			'province' => 'Province',
			'city' => 'City',
			'area' => 'Area',
			'address' => 'Address',
			'remind' => 'Remind',
			'privacy' => 'Privacy',
			'logintime' => 'Logintime',
			'addtime' => 'Addtime',
			'addip' => 'Addip',
			'uptime' => 'Uptime',
			'upip' => 'Upip',
			'lasttime' => 'Lasttime',
			'lastip' => 'Lastip',
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

		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('order',$this->order);
		$criteria->compare('purview',$this->purview,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('paypassword',$this->paypassword,true);
		$criteria->compare('islock',$this->islock);
		$criteria->compare('invite_userid',$this->invite_userid);
		$criteria->compare('invite_money',$this->invite_money,true);
		$criteria->compare('real_status',$this->real_status);
		$criteria->compare('card_type',$this->card_type,true);
		$criteria->compare('card_id',$this->card_id,true);
		$criteria->compare('card_pic1',$this->card_pic1,true);
		$criteria->compare('card_pic2',$this->card_pic2,true);
		$criteria->compare('nation',$this->nation,true);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('integral',$this->integral,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('avatar_status',$this->avatar_status);
		$criteria->compare('email_status',$this->email_status);
		$criteria->compare('phone_status',$this->phone_status);
		$criteria->compare('video_status',$this->video_status);
		$criteria->compare('scene_status',$this->scene_status);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('wangwang',$this->wangwang,true);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('remind',$this->remind,true);
		$criteria->compare('privacy',$this->privacy,true);
		$criteria->compare('logintime',$this->logintime);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);
		$criteria->compare('uptime',$this->uptime,true);
		$criteria->compare('upip',$this->upip,true);
		$criteria->compare('lasttime',$this->lasttime,true);
		$criteria->compare('lastip',$this->lastip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}