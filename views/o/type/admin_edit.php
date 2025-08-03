<?php
/**
 * Vacancy Types (vacancy-type)
 * @var $this TypeController
 * @var $model VacancyType
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 1 March 2017, 18:08 WIB
 * @link https://github.com/ommu/mod-vacancy
 *
 */

	$this->breadcrumbs=array(
		'Vacancy Types'=>array('manage'),
		$model->type_id=>array('view','id'=>$model->type_id),
		Yii::t('phrase', 'Update'),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>