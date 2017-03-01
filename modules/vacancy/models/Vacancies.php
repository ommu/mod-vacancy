<?php
/**
 * Vacancies
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (ommu.co)
 * @created date 1 March 2017, 16:51 WIB
 * @link https://github.com/ommu/Vacancy-Advanced
 * @contact (+62)856-299-4114
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
 * This is the model class for table "ommu_vacancies".
 *
 * The followings are the available columns in table 'ommu_vacancies':
 * @property string $vacancy_id
 * @property integer $publish
 * @property string $member_id
 * @property string $position_id
 * @property integer $type_id
 * @property string $vacancy_style
 * @property integer $apply_online
 * @property string $vacancy_code
 * @property string $published_date
 * @property string $started_date
 * @property string $closed_date
 * @property string $intro_text
 * @property string $general_notes
 * @property string $requirements
 * @property string $responsibilty
 * @property string $additionals
 * @property string $profile_applicants
 * @property string $vacancy_ipk
 * @property string $vacancy_age
 * @property string $vacancy_degree
 * @property string $vacancy_experience
 * @property string $vacancy_needed
 * @property string $jobs_status
 * @property string $jobs_level
 * @property string $jobs_salary
 * @property string $enable_filter
 * @property string $creation_date
 * @property string $creation_id
 * @property string $modified_date
 * @property string $modified_id
 *
 * The followings are the available model relations:
 * @property OmmuMembers $member
 * @property OmmuIpediaPositions $position
 * @property OmmuVacancyType $type
 * @property OmmuVacancyApply[] $ommuVacancyApplies
 * @property OmmuVacancyGroupItem[] $ommuVacancyGroupItems
 * @property OmmuVacancyIndustry[] $ommuVacancyIndustries
 * @property OmmuVacancyMajor[] $ommuVacancyMajors
 * @property OmmuVacancyPlacement[] $ommuVacancyPlacements
 * @property OmmuVacancyTag[] $ommuVacancyTags
 * @property OmmuVacancyUniversity[] $ommuVacancyUniversities
 */
class Vacancies extends CActiveRecord
{
	public $defaultColumns = array();

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vacancies the static model class
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
		return 'ommu_vacancies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_id, position_id, type_id, vacancy_style, vacancy_code, intro_text, general_notes, requirements, profile_applicants, jobs_status, jobs_level, enable_filter, creation_date, creation_id, modified_id', 'required'),
			array('publish, type_id, apply_online', 'numerical', 'integerOnly'=>true),
			array('member_id, position_id, creation_id, modified_id', 'length', 'max'=>11),
			array('vacancy_style, jobs_level', 'length', 'max'=>6),
			array('vacancy_code', 'length', 'max'=>32),
			array('jobs_status', 'length', 'max'=>9),
			array('published_date, started_date, closed_date, responsibilty, additionals, vacancy_ipk, vacancy_age, vacancy_degree, vacancy_experience, vacancy_needed, jobs_salary, modified_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('vacancy_id, publish, member_id, position_id, type_id, vacancy_style, apply_online, vacancy_code, published_date, started_date, closed_date, intro_text, general_notes, requirements, responsibilty, additionals, profile_applicants, vacancy_ipk, vacancy_age, vacancy_degree, vacancy_experience, vacancy_needed, jobs_status, jobs_level, jobs_salary, enable_filter, creation_date, creation_id, modified_date, modified_id', 'safe', 'on'=>'search'),
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
			'member_relation' => array(self::BELONGS_TO, 'OmmuMembers', 'member_id'),
			'position_relation' => array(self::BELONGS_TO, 'OmmuIpediaPositions', 'position_id'),
			'type_relation' => array(self::BELONGS_TO, 'OmmuVacancyType', 'type_id'),
			'ommuVacancyApplies_relation' => array(self::HAS_MANY, 'OmmuVacancyApply', 'vacancy_id'),
			'ommuVacancyGroupItems_relation' => array(self::HAS_MANY, 'OmmuVacancyGroupItem', 'vacancy_id'),
			'ommuVacancyIndustries_relation' => array(self::HAS_MANY, 'OmmuVacancyIndustry', 'vacancy_id'),
			'ommuVacancyMajors_relation' => array(self::HAS_MANY, 'OmmuVacancyMajor', 'vacancy_id'),
			'ommuVacancyPlacements_relation' => array(self::HAS_MANY, 'OmmuVacancyPlacement', 'vacancy_id'),
			'ommuVacancyTags_relation' => array(self::HAS_MANY, 'OmmuVacancyTag', 'vacancy_id'),
			'ommuVacancyUniversities_relation' => array(self::HAS_MANY, 'OmmuVacancyUniversity', 'vacancy_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vacancy_id' => Yii::t('attribute', 'Vacancy'),
			'publish' => Yii::t('attribute', 'Publish'),
			'member_id' => Yii::t('attribute', 'Member'),
			'position_id' => Yii::t('attribute', 'Position'),
			'type_id' => Yii::t('attribute', 'Type'),
			'vacancy_style' => Yii::t('attribute', 'Vacancy Style'),
			'apply_online' => Yii::t('attribute', 'Apply Online'),
			'vacancy_code' => Yii::t('attribute', 'Vacancy Code'),
			'published_date' => Yii::t('attribute', 'Published Date'),
			'started_date' => Yii::t('attribute', 'Started Date'),
			'closed_date' => Yii::t('attribute', 'Closed Date'),
			'intro_text' => Yii::t('attribute', 'Intro Text'),
			'general_notes' => Yii::t('attribute', 'General Notes'),
			'requirements' => Yii::t('attribute', 'Requirements'),
			'responsibilty' => Yii::t('attribute', 'Responsibilty'),
			'additionals' => Yii::t('attribute', 'Additionals'),
			'profile_applicants' => Yii::t('attribute', 'Profile Applicants'),
			'vacancy_ipk' => Yii::t('attribute', 'Vacancy Ipk'),
			'vacancy_age' => Yii::t('attribute', 'Vacancy Age'),
			'vacancy_degree' => Yii::t('attribute', 'Vacancy Degree'),
			'vacancy_experience' => Yii::t('attribute', 'Vacancy Experience'),
			'vacancy_needed' => Yii::t('attribute', 'Vacancy Needed'),
			'jobs_status' => Yii::t('attribute', 'Jobs Status'),
			'jobs_level' => Yii::t('attribute', 'Jobs Level'),
			'jobs_salary' => Yii::t('attribute', 'Jobs Salary'),
			'enable_filter' => Yii::t('attribute', 'Enable Filter'),
			'creation_date' => Yii::t('attribute', 'Creation Date'),
			'creation_id' => Yii::t('attribute', 'Creation'),
			'modified_date' => Yii::t('attribute', 'Modified Date'),
			'modified_id' => Yii::t('attribute', 'Modified'),
		);
		/*
			'Vacancy' => 'Vacancy',
			'Publish' => 'Publish',
			'Member' => 'Member',
			'Position' => 'Position',
			'Type' => 'Type',
			'Vacancy Style' => 'Vacancy Style',
			'Apply Online' => 'Apply Online',
			'Vacancy Code' => 'Vacancy Code',
			'Published Date' => 'Published Date',
			'Started Date' => 'Started Date',
			'Closed Date' => 'Closed Date',
			'Intro Text' => 'Intro Text',
			'General Notes' => 'General Notes',
			'Requirements' => 'Requirements',
			'Responsibilty' => 'Responsibilty',
			'Additionals' => 'Additionals',
			'Profile Applicants' => 'Profile Applicants',
			'Vacancy Ipk' => 'Vacancy Ipk',
			'Vacancy Age' => 'Vacancy Age',
			'Vacancy Degree' => 'Vacancy Degree',
			'Vacancy Experience' => 'Vacancy Experience',
			'Vacancy Needed' => 'Vacancy Needed',
			'Jobs Status' => 'Jobs Status',
			'Jobs Level' => 'Jobs Level',
			'Jobs Salary' => 'Jobs Salary',
			'Enable Filter' => 'Enable Filter',
			'Creation Date' => 'Creation Date',
			'Creation' => 'Creation',
			'Modified Date' => 'Modified Date',
			'Modified' => 'Modified',
		
		*/
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

		$criteria->compare('t.vacancy_id',strtolower($this->vacancy_id),true);
		if(isset($_GET['type']) && $_GET['type'] == 'publish')
			$criteria->compare('t.publish',1);
		elseif(isset($_GET['type']) && $_GET['type'] == 'unpublish')
			$criteria->compare('t.publish',0);
		elseif(isset($_GET['type']) && $_GET['type'] == 'trash')
			$criteria->compare('t.publish',2);
		else {
			$criteria->addInCondition('t.publish',array(0,1));
			$criteria->compare('t.publish',$this->publish);
		}
		if(isset($_GET['member']))
			$criteria->compare('t.member_id',$_GET['member']);
		else
			$criteria->compare('t.member_id',$this->member_id);
		if(isset($_GET['position']))
			$criteria->compare('t.position_id',$_GET['position']);
		else
			$criteria->compare('t.position_id',$this->position_id);
		if(isset($_GET['type']))
			$criteria->compare('t.type_id',$_GET['type']);
		else
			$criteria->compare('t.type_id',$this->type_id);
		$criteria->compare('t.vacancy_style',strtolower($this->vacancy_style),true);
		$criteria->compare('t.apply_online',$this->apply_online);
		$criteria->compare('t.vacancy_code',strtolower($this->vacancy_code),true);
		if($this->published_date != null && !in_array($this->published_date, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.published_date)',date('Y-m-d', strtotime($this->published_date)));
		if($this->started_date != null && !in_array($this->started_date, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.started_date)',date('Y-m-d', strtotime($this->started_date)));
		if($this->closed_date != null && !in_array($this->closed_date, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.closed_date)',date('Y-m-d', strtotime($this->closed_date)));
		$criteria->compare('t.intro_text',strtolower($this->intro_text),true);
		$criteria->compare('t.general_notes',strtolower($this->general_notes),true);
		$criteria->compare('t.requirements',strtolower($this->requirements),true);
		$criteria->compare('t.responsibilty',strtolower($this->responsibilty),true);
		$criteria->compare('t.additionals',strtolower($this->additionals),true);
		$criteria->compare('t.profile_applicants',strtolower($this->profile_applicants),true);
		$criteria->compare('t.vacancy_ipk',strtolower($this->vacancy_ipk),true);
		$criteria->compare('t.vacancy_age',strtolower($this->vacancy_age),true);
		$criteria->compare('t.vacancy_degree',strtolower($this->vacancy_degree),true);
		$criteria->compare('t.vacancy_experience',strtolower($this->vacancy_experience),true);
		$criteria->compare('t.vacancy_needed',strtolower($this->vacancy_needed),true);
		$criteria->compare('t.jobs_status',strtolower($this->jobs_status),true);
		$criteria->compare('t.jobs_level',strtolower($this->jobs_level),true);
		$criteria->compare('t.jobs_salary',strtolower($this->jobs_salary),true);
		$criteria->compare('t.enable_filter',strtolower($this->enable_filter),true);
		if($this->creation_date != null && !in_array($this->creation_date, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.creation_date)',date('Y-m-d', strtotime($this->creation_date)));
		if(isset($_GET['creation']))
			$criteria->compare('t.creation_id',$_GET['creation']);
		else
			$criteria->compare('t.creation_id',$this->creation_id);
		if($this->modified_date != null && !in_array($this->modified_date, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.modified_date)',date('Y-m-d', strtotime($this->modified_date)));
		if(isset($_GET['modified']))
			$criteria->compare('t.modified_id',$_GET['modified']);
		else
			$criteria->compare('t.modified_id',$this->modified_id);

		if(!isset($_GET['Vacancies_sort']))
			$criteria->order = 't.vacancy_id DESC';

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
			//$this->defaultColumns[] = 'vacancy_id';
			$this->defaultColumns[] = 'publish';
			$this->defaultColumns[] = 'member_id';
			$this->defaultColumns[] = 'position_id';
			$this->defaultColumns[] = 'type_id';
			$this->defaultColumns[] = 'vacancy_style';
			$this->defaultColumns[] = 'apply_online';
			$this->defaultColumns[] = 'vacancy_code';
			$this->defaultColumns[] = 'published_date';
			$this->defaultColumns[] = 'started_date';
			$this->defaultColumns[] = 'closed_date';
			$this->defaultColumns[] = 'intro_text';
			$this->defaultColumns[] = 'general_notes';
			$this->defaultColumns[] = 'requirements';
			$this->defaultColumns[] = 'responsibilty';
			$this->defaultColumns[] = 'additionals';
			$this->defaultColumns[] = 'profile_applicants';
			$this->defaultColumns[] = 'vacancy_ipk';
			$this->defaultColumns[] = 'vacancy_age';
			$this->defaultColumns[] = 'vacancy_degree';
			$this->defaultColumns[] = 'vacancy_experience';
			$this->defaultColumns[] = 'vacancy_needed';
			$this->defaultColumns[] = 'jobs_status';
			$this->defaultColumns[] = 'jobs_level';
			$this->defaultColumns[] = 'jobs_salary';
			$this->defaultColumns[] = 'enable_filter';
			$this->defaultColumns[] = 'creation_date';
			$this->defaultColumns[] = 'creation_id';
			$this->defaultColumns[] = 'modified_date';
			$this->defaultColumns[] = 'modified_id';
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
			if(!isset($_GET['type'])) {
				$this->defaultColumns[] = array(
					'name' => 'publish',
					'value' => 'Utility::getPublish(Yii::app()->controller->createUrl("publish",array("id"=>$data->vacancy_id)), $data->publish, 1)',
					'htmlOptions' => array(
						'class' => 'center',
					),
					'filter'=>array(
						1=>Yii::t('phrase', 'Yes'),
						0=>Yii::t('phrase', 'No'),
					),
					'type' => 'raw',
				);
			}
			$this->defaultColumns[] = 'member_id';
			$this->defaultColumns[] = 'position_id';
			$this->defaultColumns[] = 'type_id';
			$this->defaultColumns[] = 'vacancy_style';
			if(!isset($_GET['type'])) {
				$this->defaultColumns[] = array(
					'name' => 'apply_online',
					'value' => 'Utility::getPublish(Yii::app()->controller->createUrl("apply_online",array("id"=>$data->vacancy_id)), $data->apply_online, 1)',
					'htmlOptions' => array(
						'class' => 'center',
					),
					'filter'=>array(
						1=>Yii::t('phrase', 'Yes'),
						0=>Yii::t('phrase', 'No'),
					),
					'type' => 'raw',
				);
			}
			$this->defaultColumns[] = 'vacancy_code';
			$this->defaultColumns[] = array(
				'name' => 'published_date',
				'value' => 'Utility::dateFormat($data->published_date)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'published_date',
					'language' => 'ja',
					'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'published_date_filter',
					),
					'options'=>array(
						'showOn' => 'focus',
						'dateFormat' => 'dd-mm-yy',
						'showOtherMonths' => true,
						'selectOtherMonths' => true,
						'changeMonth' => true,
						'changeYear' => true,
						'showButtonPanel' => true,
					),
				), true),
			);
			$this->defaultColumns[] = array(
				'name' => 'started_date',
				'value' => 'Utility::dateFormat($data->started_date)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'started_date',
					'language' => 'ja',
					'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'started_date_filter',
					),
					'options'=>array(
						'showOn' => 'focus',
						'dateFormat' => 'dd-mm-yy',
						'showOtherMonths' => true,
						'selectOtherMonths' => true,
						'changeMonth' => true,
						'changeYear' => true,
						'showButtonPanel' => true,
					),
				), true),
			);
			$this->defaultColumns[] = array(
				'name' => 'closed_date',
				'value' => 'Utility::dateFormat($data->closed_date)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'closed_date',
					'language' => 'ja',
					'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'closed_date_filter',
					),
					'options'=>array(
						'showOn' => 'focus',
						'dateFormat' => 'dd-mm-yy',
						'showOtherMonths' => true,
						'selectOtherMonths' => true,
						'changeMonth' => true,
						'changeYear' => true,
						'showButtonPanel' => true,
					),
				), true),
			);
			$this->defaultColumns[] = 'intro_text';
			$this->defaultColumns[] = 'general_notes';
			$this->defaultColumns[] = 'requirements';
			$this->defaultColumns[] = 'responsibilty';
			$this->defaultColumns[] = 'additionals';
			$this->defaultColumns[] = 'profile_applicants';
			$this->defaultColumns[] = 'vacancy_ipk';
			$this->defaultColumns[] = 'vacancy_age';
			$this->defaultColumns[] = 'vacancy_degree';
			$this->defaultColumns[] = 'vacancy_experience';
			$this->defaultColumns[] = 'vacancy_needed';
			$this->defaultColumns[] = 'jobs_status';
			$this->defaultColumns[] = 'jobs_level';
			$this->defaultColumns[] = 'jobs_salary';
			$this->defaultColumns[] = 'enable_filter';
			$this->defaultColumns[] = array(
				'name' => 'creation_date',
				'value' => 'Utility::dateFormat($data->creation_date)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'creation_date',
					'language' => 'ja',
					'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'creation_date_filter',
					),
					'options'=>array(
						'showOn' => 'focus',
						'dateFormat' => 'dd-mm-yy',
						'showOtherMonths' => true,
						'selectOtherMonths' => true,
						'changeMonth' => true,
						'changeYear' => true,
						'showButtonPanel' => true,
					),
				), true),
			);
			$this->defaultColumns[] = 'creation_id';
			$this->defaultColumns[] = array(
				'name' => 'modified_date',
				'value' => 'Utility::dateFormat($data->modified_date)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'modified_date',
					'language' => 'ja',
					'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'modified_date_filter',
					),
					'options'=>array(
						'showOn' => 'focus',
						'dateFormat' => 'dd-mm-yy',
						'showOtherMonths' => true,
						'selectOtherMonths' => true,
						'changeMonth' => true,
						'changeYear' => true,
						'showButtonPanel' => true,
					),
				), true),
			);
			$this->defaultColumns[] = 'modified_id';
		}
		parent::afterConstruct();
	}

	/**
	 * User get information
	 */
	public static function getInfo($id, $column=null)
	{
		if($column != null) {
			$model = self::model()->findByPk($id,array(
				'select' => $column
			));
			return $model->$column;
			
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
			//$this->published_date = date('Y-m-d', strtotime($this->published_date));
			//$this->started_date = date('Y-m-d', strtotime($this->started_date));
			//$this->closed_date = date('Y-m-d', strtotime($this->closed_date));
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