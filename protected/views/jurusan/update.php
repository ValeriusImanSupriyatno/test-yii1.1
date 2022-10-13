<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusans'=>array('index'),
	$model->id_jurusan=>array('view','id'=>$model->id_jurusan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jurusan', 'url'=>array('index')),
	array('label'=>'Create Jurusan', 'url'=>array('create')),
	array('label'=>'View Jurusan', 'url'=>array('view', 'id'=>$model->id_jurusan)),
	array('label'=>'Manage Jurusan', 'url'=>array('admin')),
);
?>

<h1>Update Jurusan <?php echo $model->id_jurusan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>