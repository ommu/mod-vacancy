<?php
/**
 * Vacancies (vacancies)
 * @var $this AdminController
 * @var $model Vacancies
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 2 March 2017, 07:23 WIB
 * @link https://github.com/ommu/mod-vacancy-advanced
 * @contact (+62)856-299-4114
 *
 */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<ul>
		<li>
			<?php echo $model->getAttributeLabel('vacancy_id'); ?><br/>
			<?php echo $form->textField($model,'vacancy_id',array('size'=>11,'maxlength'=>11)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('publish'); ?><br/>
			<?php echo $form->textField($model,'publish'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('member_id'); ?><br/>
			<?php echo $form->textField($model,'member_id',array('size'=>11,'maxlength'=>11)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('position_id'); ?><br/>
			<?php echo $form->textField($model,'position_id',array('size'=>11,'maxlength'=>11)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('type_id'); ?><br/>
			<?php echo $form->textField($model,'type_id'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('vacancy_style'); ?><br/>
			<?php echo $form->textField($model,'vacancy_style',array('size'=>6,'maxlength'=>6)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('apply_online'); ?><br/>
			<?php echo $form->textField($model,'apply_online'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('vacancy_code'); ?><br/>
			<?php echo $form->textField($model,'vacancy_code',array('size'=>32,'maxlength'=>32)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('published_date'); ?><br/>
			<?php echo $form->textField($model,'published_date'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('started_date'); ?><br/>
			<?php echo $form->textField($model,'started_date'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('closed_date'); ?><br/>
			<?php echo $form->textField($model,'closed_date'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('intro_text'); ?><br/>
			<?php echo $form->textArea($model,'intro_text',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('general_notes'); ?><br/>
			<?php echo $form->textArea($model,'general_notes',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('requirements'); ?><br/>
			<?php echo $form->textArea($model,'requirements',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('responsibilty'); ?><br/>
			<?php echo $form->textArea($model,'responsibilty',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('additionals'); ?><br/>
			<?php echo $form->textArea($model,'additionals',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('profile_applicants'); ?><br/>
			<?php echo $form->textArea($model,'profile_applicants',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('vacancy_ipk'); ?><br/>
			<?php echo $form->textArea($model,'vacancy_ipk',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('vacancy_age'); ?><br/>
			<?php echo $form->textArea($model,'vacancy_age',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('vacancy_degree'); ?><br/>
			<?php echo $form->textArea($model,'vacancy_degree',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('vacancy_experience'); ?><br/>
			<?php echo $form->textArea($model,'vacancy_experience',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('vacancy_needed'); ?><br/>
			<?php echo $form->textArea($model,'vacancy_needed',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('jobs_status'); ?><br/>
			<?php echo $form->textField($model,'jobs_status',array('size'=>9,'maxlength'=>9)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('jobs_level'); ?><br/>
			<?php echo $form->textField($model,'jobs_level',array('size'=>6,'maxlength'=>6)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('jobs_salary'); ?><br/>
			<?php echo $form->textArea($model,'jobs_salary',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('enable_filter'); ?><br/>
			<?php echo $form->textArea($model,'enable_filter',array('rows'=>6, 'cols'=>50)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('creation_date'); ?><br/>
			<?php echo $form->textField($model,'creation_date'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('creation_id'); ?><br/>
			<?php echo $form->textField($model,'creation_id',array('size'=>11,'maxlength'=>11)); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('modified_date'); ?><br/>
			<?php echo $form->textField($model,'modified_date'); ?>
		</li>

		<li>
			<?php echo $model->getAttributeLabel('modified_id'); ?><br/>
			<?php echo $form->textField($model,'modified_id',array('size'=>11,'maxlength'=>11)); ?>
		</li>

		<li class="submit">
			<?php echo CHtml::submitButton(Yii::t('phrase', 'Search')); ?>
		</li>
	</ul>
<?php $this->endWidget(); ?>
