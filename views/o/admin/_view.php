<?php
/**
 * Vacancies (vacancies)
 * @var $this AdminController
 * @var $data Vacancies
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 2 March 2017, 07:23 WIB
 * @link https://github.com/ommu/ommu-vacancy
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancy_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vacancy_id), array('view', 'id'=>$data->vacancy_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publish')); ?>:</b>
	<?php echo CHtml::encode($data->publish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
	<?php echo CHtml::encode($data->member_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_id')); ?>:</b>
	<?php echo CHtml::encode($data->position_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancy_style')); ?>:</b>
	<?php echo CHtml::encode($data->vacancy_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_online')); ?>:</b>
	<?php echo CHtml::encode($data->apply_online); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancy_code')); ?>:</b>
	<?php echo CHtml::encode($data->vacancy_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published_date')); ?>:</b>
	<?php echo CHtml::encode($data->published_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('started_date')); ?>:</b>
	<?php echo CHtml::encode($data->started_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closed_date')); ?>:</b>
	<?php echo CHtml::encode($data->closed_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intro_text')); ?>:</b>
	<?php echo CHtml::encode($data->intro_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('general_notes')); ?>:</b>
	<?php echo CHtml::encode($data->general_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requirements')); ?>:</b>
	<?php echo CHtml::encode($data->requirements); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsibilty')); ?>:</b>
	<?php echo CHtml::encode($data->responsibilty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additionals')); ?>:</b>
	<?php echo CHtml::encode($data->additionals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile_applicants')); ?>:</b>
	<?php echo CHtml::encode($data->profile_applicants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancy_ipk')); ?>:</b>
	<?php echo CHtml::encode($data->vacancy_ipk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancy_age')); ?>:</b>
	<?php echo CHtml::encode($data->vacancy_age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancy_degree')); ?>:</b>
	<?php echo CHtml::encode($data->vacancy_degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancy_experience')); ?>:</b>
	<?php echo CHtml::encode($data->vacancy_experience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacancy_needed')); ?>:</b>
	<?php echo CHtml::encode($data->vacancy_needed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobs_status')); ?>:</b>
	<?php echo CHtml::encode($data->jobs_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobs_level')); ?>:</b>
	<?php echo CHtml::encode($data->jobs_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobs_salary')); ?>:</b>
	<?php echo CHtml::encode($data->jobs_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enable_filter')); ?>:</b>
	<?php echo CHtml::encode($data->enable_filter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_id')); ?>:</b>
	<?php echo CHtml::encode($data->creation_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_date')); ?>:</b>
	<?php echo CHtml::encode($data->modified_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_id')); ?>:</b>
	<?php echo CHtml::encode($data->modified_id); ?>
	<br />

	*/ ?>

</div>