<?php
/**
 * Vacancies (vacancies)
 * @var $this AdminController
 * @var $model Vacancies
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 2 March 2017, 07:23 WIB
 * @link https://github.com/ommu/mod-vacancy
 *
 */
?>

<?php $form=$this->beginWidget('application.libraries.core.components.system.OActiveForm', array(
	'id'=>'vacancies-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

<?php //begin.Messages ?>
<div id="ajax-message">
	<?php echo $form->errorSummary($model); ?>
</div>
<?php //begin.Messages ?>

<fieldset>

	<div class="clearfix publish">
		<?php echo $form->labelEx($model,'publish'); ?>
		<div class="desc">
			<?php echo $form->checkBox($model,'publish'); ?>
			<?php echo $form->labelEx($model,'publish'); ?>
			<?php echo $form->error($model,'publish'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'member_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'member_id',array('size'=>11,'maxlength'=>11)); ?>
			<?php echo $form->error($model,'member_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'position_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'position_id',array('size'=>11,'maxlength'=>11)); ?>
			<?php echo $form->error($model,'position_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'type_id'); ?>
			<?php echo $form->error($model,'type_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'vacancy_style'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'vacancy_style',array('size'=>6,'maxlength'=>6)); ?>
			<?php echo $form->error($model,'vacancy_style'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix publish">
		<?php echo $form->labelEx($model,'apply_online'); ?>
		<div class="desc">
			<?php echo $form->checkBox($model,'apply_online'); ?>
			<?php echo $form->labelEx($model,'apply_online'); ?>
			<?php echo $form->error($model,'apply_online'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'vacancy_code'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'vacancy_code',array('size'=>32,'maxlength'=>32)); ?>
			<?php echo $form->error($model,'vacancy_code'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'published_date'); ?>
		<div class="desc">
			<?php
			$model->published_date = !$model->isNewRecord ? (!in_array($model->published_date, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->published_date)) : '') : '';
			//echo $form->textField($model,'published_date');
			$this->widget('application.libraries.core.components.system.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'published_date',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'published_date'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'started_date'); ?>
		<div class="desc">
			<?php
			$model->started_date = !$model->isNewRecord ? (!in_array($model->started_date, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->started_date)) : '') : '';
			//echo $form->textField($model,'started_date');
			$this->widget('application.libraries.core.components.system.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'started_date',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'started_date'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'closed_date'); ?>
		<div class="desc">
			<?php
			$model->closed_date = !$model->isNewRecord ? (!in_array($model->closed_date, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->closed_date)) : '') : '';
			//echo $form->textField($model,'closed_date');
			$this->widget('application.libraries.core.components.system.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'closed_date',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'closed_date'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'intro_text'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'intro_text',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'intro_text'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'general_notes'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'general_notes',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'general_notes'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'requirements'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'requirements',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'requirements'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'responsibilty'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'responsibilty',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'responsibilty'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'additionals'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'additionals',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'additionals'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'profile_applicants'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'profile_applicants',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'profile_applicants'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'vacancy_ipk'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'vacancy_ipk',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'vacancy_ipk'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'vacancy_age'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'vacancy_age',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'vacancy_age'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'vacancy_degree'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'vacancy_degree',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'vacancy_degree'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'vacancy_experience'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'vacancy_experience',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'vacancy_experience'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'vacancy_needed'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'vacancy_needed',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'vacancy_needed'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'jobs_status'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'jobs_status',array('size'=>9,'maxlength'=>9)); ?>
			<?php echo $form->error($model,'jobs_status'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'jobs_level'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'jobs_level',array('size'=>6,'maxlength'=>6)); ?>
			<?php echo $form->error($model,'jobs_level'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'jobs_salary'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'jobs_salary',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'jobs_salary'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'enable_filter'); ?>
		<div class="desc">
			<?php echo $form->textArea($model,'enable_filter',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'enable_filter'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'creation_date'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'creation_date'); ?>
			<?php echo $form->error($model,'creation_date'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'creation_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'creation_id',array('size'=>11,'maxlength'=>11)); ?>
			<?php echo $form->error($model,'creation_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'modified_date'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'modified_date'); ?>
			<?php echo $form->error($model,'modified_date'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'modified_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'modified_id',array('size'=>11,'maxlength'=>11)); ?>
			<?php echo $form->error($model,'modified_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="submit clearfix">
		<label>&nbsp;</label>
		<div class="desc">
			<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save'), array('onclick' => 'setEnableSave()')); ?>
		</div>
	</div>

</fieldset>
<?php /*
<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save') ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
</div>
*/?>
<?php $this->endWidget(); ?>


