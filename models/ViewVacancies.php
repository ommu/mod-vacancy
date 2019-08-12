<?php
/**
 * ViewVacancies
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 1 March 2017, 16:58 WIB
 * @link https://github.com/ommu/mod-vacancy
 *
 * This is the template for generating the model class of a specified table.
 * - $this: the ModelCode object
 * - $tableName: the table name for this class (prefix is already removed if necessary)
 * - $modelClass: the model class name
 * - $columns: list of table columns (name=>CDbColumnSchema)
 * - $labels: list of attribute labels (name=>label)
 * - $rules: list of validation rules
 * - $relations: list of relations (name=>relation declaration)
 *
 * --------------------------------------------------------------------------------------
 *
 * This is the model class for table "_view_vacancies".
 *
 * The followings are the available columns in table '_view_vacancies':
 * @property string $vacancy_id
 * @property string $group_id
 * @property string $position_name
 * @property string $applys
 * @property string $apply_all
 * @property string $universities
 * @property string $majors
 * @property string $placements
 * @property string $tags
 * @property string $industries
 * @property string $vacancies
 * @property string $vacancy_all
 */
class ViewVacancies extends CActiveRecord
{
	public $defaultColumns = array();

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ViewVacancies the static model class
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
		return '_view_vacancies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vacancy_id, group_id', 'length', 'max'=>11),
			array('position_name', 'length', 'max'=>64),
			array('applys, vacancies', 'length', 'max'=>23),
			array('apply_all, universities, majors, placements, tags, industries, vacancy_all', 'length', 'max'=>21),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('vacancy_id, group_id, position_name, applys, apply_all, universities, majors, placements, tags, industries, vacancies, vacancy_all', 'safe', 'on'=>'search'),
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
			'vacancy_id' => Yii::t('attribute', 'Vacancy'),
			'group_id' => Yii::t('attribute', 'Group'),
			'position_name' => Yii::t('attribute', 'Position Name'),
			'applys' => Yii::t('attribute', 'Applys'),
			'apply_all' => Yii::t('attribute', 'Apply All'),
			'universities' => Yii::t('attribute', 'Universities'),
			'majors' => Yii::t('attribute', 'Majors'),
			'placements' => Yii::t('attribute', 'Placements'),
			'tags' => Yii::t('attribute', 'Tags'),
			'industries' => Yii::t('attribute', 'Industries'),
			'vacancies' => Yii::t('attribute', 'Vacancies'),
			'vacancy_all' => Yii::t('attribute', 'Vacancy All'),
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

		$criteria->compare('t.vacancy_id', strtolower($this->vacancy_id), true);
		$criteria->compare('t.group_id', strtolower($this->group_id), true);
		$criteria->compare('t.position_name', strtolower($this->position_name), true);
		$criteria->compare('t.applys', strtolower($this->applys), true);
		$criteria->compare('t.apply_all', strtolower($this->apply_all), true);
		$criteria->compare('t.universities', strtolower($this->universities), true);
		$criteria->compare('t.majors', strtolower($this->majors), true);
		$criteria->compare('t.placements', strtolower($this->placements), true);
		$criteria->compare('t.tags', strtolower($this->tags), true);
		$criteria->compare('t.industries', strtolower($this->industries), true);
		$criteria->compare('t.vacancies', strtolower($this->vacancies), true);
		$criteria->compare('t.vacancy_all', strtolower($this->vacancy_all), true);

		if(!Yii::app()->getRequest()->getParam('ViewVacancies_sort'))
			$criteria->order = 't. DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>30,
			),
		));
	}


	/**
	 * Get column for CGrid View
	 */
	public function getGridColumn($columns=null) {
		if($columns !== null) {
			foreach($columns as $val) {
				/*
				if(trim($val) == 'enabled') {
					$this->defaultColumns[] = array(
						'name'  => 'enabled',
						'value' => '$data->enabled == 1? "Ya": "Tidak"',
					);
				}
				*/
				$this->defaultColumns[] = $val;
			}
		} else {
			$this->defaultColumns[] = 'vacancy_id';
			$this->defaultColumns[] = 'group_id';
			$this->defaultColumns[] = 'position_name';
			$this->defaultColumns[] = 'applys';
			$this->defaultColumns[] = 'apply_all';
			$this->defaultColumns[] = 'universities';
			$this->defaultColumns[] = 'majors';
			$this->defaultColumns[] = 'placements';
			$this->defaultColumns[] = 'tags';
			$this->defaultColumns[] = 'industries';
			$this->defaultColumns[] = 'vacancies';
			$this->defaultColumns[] = 'vacancy_all';
		}

		return $this->defaultColumns;
	}

	/**
	 * Set default columns to display
	 */
	protected function afterConstruct() {
		if(count($this->defaultColumns) == 0) {
			/*
			$this->defaultColumns[] = array(
				'class' => 'CCheckBoxColumn',
				'name' => 'id',
				'selectableRows' => 2,
				'checkBoxHtmlOptions' => array('name' => 'trash_id[]')
			);
			*/
			$this->defaultColumns[] = array(
				'header' => 'No',
				'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
			);
			$this->defaultColumns[] = 'vacancy_id';
			$this->defaultColumns[] = 'group_id';
			$this->defaultColumns[] = 'position_name';
			$this->defaultColumns[] = 'applys';
			$this->defaultColumns[] = 'apply_all';
			$this->defaultColumns[] = 'universities';
			$this->defaultColumns[] = 'majors';
			$this->defaultColumns[] = 'placements';
			$this->defaultColumns[] = 'tags';
			$this->defaultColumns[] = 'industries';
			$this->defaultColumns[] = 'vacancies';
			$this->defaultColumns[] = 'vacancy_all';
		}
		parent::afterConstruct();
	}

	/**
	 * User get information
	 */
	public static function getInfo($id, $column=null)
	{
		if($column != null) {
			$model = self::model()->findByPk($id, array(
				'select' => $column,
			));
			if(count(explode(',', $column)) == 1)
				return $model->$column;
			else
				return $model;
			
		} else {
			$model = self::model()->findByPk($id);
			return $model;
		}
	}

	/**
	 * before validate attributes
	 */
	/*
	protected function beforeValidate() {
		if(parent::beforeValidate()) {
			// Create action
		}
		return true;
	}
	*/

	/**
	 * after validate attributes
	 */
	/*
	protected function afterValidate()
	{
		parent::afterValidate();
			// Create action
		return true;
	}
	*/
	
	/**
	 * before save attributes
	 */
	/*
	protected function beforeSave() {
		if(parent::beforeSave()) {
		}
		return true;	
	}
	*/
	
	/**
	 * After save attributes
	 */
	/*
	protected function afterSave() {
		parent::afterSave();
		// Create action
	}
	*/

	/**
	 * Before delete attributes
	 */
	/*
	protected function beforeDelete() {
		if(parent::beforeDelete()) {
			// Create action
		}
		return true;
	}
	*/

	/**
	 * After delete attributes
	 */
	/*
	protected function afterDelete() {
		parent::afterDelete();
		// Create action
	}
	*/

}