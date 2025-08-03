<?php
/**
 * Vacancies (vacancies)
 * @var $this AdminController
 * @var $model Vacancies
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 2 March 2017, 07:23 WIB
 * @link https://github.com/ommu/mod-vacancy
 *
 */

	$this->breadcrumbs=array(
		'Vacancies'=>array('manage'),
		$model->vacancy_id=>array('view','id'=>$model->vacancy_id),
		Yii::t('phrase', 'Update'),
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
