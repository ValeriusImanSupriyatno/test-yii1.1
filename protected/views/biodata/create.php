<?php
/* @var $this BiodataController */
/* @var $model Biodata */

$this->breadcrumbs=array(
	'Biodatas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Biodata', 'url'=>array('index')),
	array('label'=>'Manage Biodata', 'url'=>array('admin')),
);
?>

<h1>Create Biodata</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>