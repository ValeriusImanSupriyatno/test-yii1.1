<?php
/* @var $this BiodataController */
/* @var $model Biodata */

$this->breadcrumbs=array(
	'Biodatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Biodata', 'url'=>array('index')),
	array('label'=>'Create Biodata', 'url'=>array('create')),
	array('label'=>'View Biodata', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Biodata', 'url'=>array('admin')),
);
?>

<h1>Update Biodata <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>