<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $login
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $country
 * @property string $city
 * @property string $email
 * @property string $phone
 * @property string $gender
 * @property string $birthday
 * @property integer $balance_likes
 * @property integer $balance_bn
 * @property string $occupation
 * @property integer $rating
 * @property string $fb_id
 * @property string $vk_id
 * @property string $tw_id
 * @property string $g_id
 */
class User extends CActiveRecord
{
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
			array('login, pass, name, surname, patronymic, country, city, email, phone, gender, birthday, occupation, fb_id, vk_id, tw_id, g_id', 'required'),
			array('balance_likes, balance_bn, rating', 'numerical', 'integerOnly'=>true),
			array('login, name, surname, patronymic, country, city, email, gender', 'length', 'max'=>35),
			array('phone', 'length', 'max'=>22),
			array('fb_id, vk_id, tw_id, g_id', 'length', 'max'=>99),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, login, name, surname, patronymic, country, city, email, phone, gender, birthday, balance_likes, balance_bn, occupation, rating, fb_id, vk_id, tw_id, g_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
    {
        return array(
            'projects' => array(self::MANY_MANY, 'ProjectAb', 'user_project(user_id, project_id)'),
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'login' => 'Login',
			'name' => 'Name',
			'surname' => 'Surname',
			'patronymic' => 'Patronymic',
			'country' => 'Country',
			'city' => 'City',
			'email' => 'Email',
			'phone' => 'Phone',
			'gender' => 'Gender',
			'birthday' => 'Birthday',
			'balance_likes' => 'Balance Likes',
			'balance_bn' => 'Balance Bn',
			'occupation' => 'Occupation',
			'rating' => 'Rating',
			'fb_id' => 'Fb',
			'vk_id' => 'Vk',
			'tw_id' => 'Tw',
			'g_id' => 'G',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('patronymic',$this->patronymic,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('balance_likes',$this->balance_likes);
		$criteria->compare('balance_bn',$this->balance_bn);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('fb_id',$this->fb_id,true);
		$criteria->compare('vk_id',$this->vk_id,true);
		$criteria->compare('tw_id',$this->tw_id,true);
		$criteria->compare('g_id',$this->g_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
