<?php
/**
 * Vacancy Types (vacancy-type)
 * @var $this TypeController
 * @var $model VacancyType
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 1 March 2017, 18:08 WIB
 * @link https://github.com/ommu/ommu-vacancy
 *
 */

	$this->breadcrumbs=array(
		'Vacancy Types'=>array('manage'),
		'Create',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>