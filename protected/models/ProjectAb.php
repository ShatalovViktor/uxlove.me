<?php

/**
 * This is the model class for table "{{project_ab}}".
 *
 * The followings are the available columns in table '{{project_ab}}':
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property integer $budget
 * @property integer $cost
 * @property integer $commission
 * @property string $content
 * @property string $foto_a
 * @property string $foto_b
 * @property string $created
 * @property string $start
 * @property string $finish
 */
class ProjectAb extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{project_ab}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, name, budget, cost, commission, content, foto_a, foto_b, created, start, finish', 'required'),
			array('user_id, budget, cost, commission', 'numerical', 'integerOnly'=>true),
			array('name, foto_a, foto_b', 'length', 'max'=>35),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, name, budget, cost, commission, content, foto_a, foto_b, created, start, finish', 'safe', 'on'=>'search'),
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
            'users' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'name' => 'Name',
			'budget' => 'Budget',
			'cost' => 'Cost',
			'commission' => 'Commission',
			'content' => 'Content',
			'foto_a' => 'Foto A',
			'foto_b' => 'Foto B',
			'created' => 'Created',
			'start' => 'Start',
			'finish' => 'Finish',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('budget',$this->budget);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('commission',$this->commission);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('foto_a',$this->foto_a,true);
		$criteria->compare('foto_b',$this->foto_b,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('finish',$this->finish,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProjectAb the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}