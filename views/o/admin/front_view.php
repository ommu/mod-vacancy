<?php
/**
 * Vacancies (vacancies)
 * @var $this AdminController
 * @var $model Vacancies
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 2 March 2017, 07:23 WIB
 * @link https://github.com/ommu/mod-vacancy
 *
 */

	$this->breadcrumbs=array(
		'Vacancies'=>array('manage'),
		$model->vacancy_id,
	);
?>

<?php //begin.Messages ?>
<?php
if(Yii::app()->user->hasFlash('success'))
	echo $this->flashMessage(Yii::app()->user->getFlash('success'), 'success');
?>
<?php //end.Messages ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'vacancy_id',
			'value'=>$model->vacancy_id,
			//'value'=>$model->vacancy_id != '' ? $model->vacancy_id : '-',
		),
		array(
			'name'=>'publish',
			'value'=>$model->publish == '1' ? CHtml::image(Yii::app()->theme->baseUrl.'/images/icons/publish.png') : CHtml::image(Yii::app()->theme->baseUrl.'/images/icons/unpublish.png'),
			//'value'=>$model->publish,
		),
		array(
			'name'=>'member_id',
			'value'=>$model->member_id,
			//'value'=>$model->member_id != '' ? $model->member_id : '-',
		),
		array(
			'name'=>'position_id',
			'value'=>$model->position_id,
			//'value'=>$model->position_id != '' ? $model->position_id : '-',
		),
		array(
			'name'=>'type_id',
			'value'=>$model->type_id,
			//'value'=>$model->type_id != '' ? $model->type_id : '-',
		),
		array(
			'name'=>'vacancy_style',
			'value'=>$model->vacancy_style,
			//'value'=>$model->vacancy_style != '' ? $model->vacancy_style : '-',
		),
		array(
			'name'=>'apply_online',
			'value'=>$model->apply_online,
			//'value'=>$model->apply_online != '' ? $model->apply_online : '-',
		),
		array(
			'name'=>'vacancy_code',
			'value'=>$model->vacancy_code,
			//'value'=>$model->vacancy_code != '' ? $model->vacancy_code : '-',
		),
		array(
			'name'=>'published_date',
			'value'=>!in_array($model->published_date, array('0000-00-00','1970-01-01','0002-12-02','-0001-11-30')) ? Utility::dateFormat($model->published_date) : '-',
		),
		array(
			'name'=>'started_date',
			'value'=>!in_array($model->started_date, array('0000-00-00','1970-01-01','0002-12-02','-0001-11-30')) ? Utility::dateFormat($model->started_date) : '-',
		),
		array(
			'name'=>'closed_date',
			'value'=>!in_array($model->closed_date, array('0000-00-00','1970-01-01','0002-12-02','-0001-11-30')) ? Utility::dateFormat($model->closed_date) : '-',
		),
		array(
			'name'=>'intro_text',
			'value'=>$model->intro_text != '' ? $model->intro_text : '-',
			//'value'=>$model->intro_text != '' ? CHtml::link($model->intro_text, Yii::app()->request->baseUrl.'/public/visit/'.$model->intro_text, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'general_notes',
			'value'=>$model->general_notes != '' ? $model->general_notes : '-',
			//'value'=>$model->general_notes != '' ? CHtml::link($model->general_notes, Yii::app()->request->baseUrl.'/public/visit/'.$model->general_notes, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'requirements',
			'value'=>$model->requirements != '' ? $model->requirements : '-',
			//'value'=>$model->requirements != '' ? CHtml::link($model->requirements, Yii::app()->request->baseUrl.'/public/visit/'.$model->requirements, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'responsibilty',
			'value'=>$model->responsibilty != '' ? $model->responsibilty : '-',
			//'value'=>$model->responsibilty != '' ? CHtml::link($model->responsibilty, Yii::app()->request->baseUrl.'/public/visit/'.$model->responsibilty, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'additionals',
			'value'=>$model->additionals != '' ? $model->additionals : '-',
			//'value'=>$model->additionals != '' ? CHtml::link($model->additionals, Yii::app()->request->baseUrl.'/public/visit/'.$model->additionals, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'profile_applicants',
			'value'=>$model->profile_applicants != '' ? $model->profile_applicants : '-',
			//'value'=>$model->profile_applicants != '' ? CHtml::link($model->profile_applicants, Yii::app()->request->baseUrl.'/public/visit/'.$model->profile_applicants, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'vacancy_ipk',
			'value'=>$model->vacancy_ipk != '' ? $model->vacancy_ipk : '-',
			//'value'=>$model->vacancy_ipk != '' ? CHtml::link($model->vacancy_ipk, Yii::app()->request->baseUrl.'/public/visit/'.$model->vacancy_ipk, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'vacancy_age',
			'value'=>$model->vacancy_age != '' ? $model->vacancy_age : '-',
			//'value'=>$model->vacancy_age != '' ? CHtml::link($model->vacancy_age, Yii::app()->request->baseUrl.'/public/visit/'.$model->vacancy_age, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'vacancy_degree',
			'value'=>$model->vacancy_degree != '' ? $model->vacancy_degree : '-',
			//'value'=>$model->vacancy_degree != '' ? CHtml::link($model->vacancy_degree, Yii::app()->request->baseUrl.'/public/visit/'.$model->vacancy_degree, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'vacancy_experience',
			'value'=>$model->vacancy_experience != '' ? $model->vacancy_experience : '-',
			//'value'=>$model->vacancy_experience != '' ? CHtml::link($model->vacancy_experience, Yii::app()->request->baseUrl.'/public/visit/'.$model->vacancy_experience, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'vacancy_needed',
			'value'=>$model->vacancy_needed != '' ? $model->vacancy_needed : '-',
			//'value'=>$model->vacancy_needed != '' ? CHtml::link($model->vacancy_needed, Yii::app()->request->baseUrl.'/public/visit/'.$model->vacancy_needed, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'jobs_status',
			'value'=>$model->jobs_status,
			//'value'=>$model->jobs_status != '' ? $model->jobs_status : '-',
		),
		array(
			'name'=>'jobs_level',
			'value'=>$model->jobs_level,
			//'value'=>$model->jobs_level != '' ? $model->jobs_level : '-',
		),
		array(
			'name'=>'jobs_salary',
			'value'=>$model->jobs_salary != '' ? $model->jobs_salary : '-',
			//'value'=>$model->jobs_salary != '' ? CHtml::link($model->jobs_salary, Yii::app()->request->baseUrl.'/public/visit/'.$model->jobs_salary, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'enable_filter',
			'value'=>$model->enable_filter != '' ? $model->enable_filter : '-',
			//'value'=>$model->enable_filter != '' ? CHtml::link($model->enable_filter, Yii::app()->request->baseUrl.'/public/visit/'.$model->enable_filter, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'creation_date',
			'value'=>!in_array($model->creation_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00','0002-12-02 07:07:12','-0001-11-30 00:00:00')) ? Utility::dateFormat($model->creation_date, true) : '-',
		),
		array(
			'name'=>'creation_id',
			'value'=>$model->creation_id,
			//'value'=>$model->creation_id != 0 ? $model->creation_id : '-',
		),
		array(
			'name'=>'modified_date',
			'value'=>!in_array($model->modified_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00','0002-12-02 07:07:12','-0001-11-30 00:00:00')) ? Utility::dateFormat($model->modified_date, true) : '-',
		),
		array(
			'name'=>'modified_id',
			'value'=>$model->modified_id,
			//'value'=>$model->modified_id != 0 ? $model->modified_id : '-',
		),
	),
)); ?>

<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
