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
 * @link https://github.com/ommu/Vacancy-Advanced
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Vacancies'=>array('manage'),
		$model->vacancy_id=>array('view','id'=>$model->vacancy_id),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
