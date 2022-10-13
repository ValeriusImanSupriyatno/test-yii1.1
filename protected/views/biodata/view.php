<?php
/* @var $this BiodataController */
/* @var $model Biodata */

$this->breadcrumbs=array(
	'Biodatas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Biodata', 'url'=>array('index')),
	array('label'=>'Create Biodata', 'url'=>array('create')),
	array('label'=>'Update Biodata', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Biodata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Biodata', 'url'=>array('admin')),
);
?>

<h1>View Biodata #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'umur',
		'alamat',
	),
)); ?>
