<?php
/**
 * Vacancy Types (vacancy-type)
 * @var $this TypeController
 * @var $model VacancyType
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 1 March 2017, 18:08 WIB
 * @link https://github.com/ommu/Vacancy-Advanced
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Vacancy Types'=>array('manage'),
		$model->type_id=>array('view','id'=>$model->type_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>