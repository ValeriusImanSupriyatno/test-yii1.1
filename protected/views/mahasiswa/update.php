<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	$model->id_mahasiswa=>array('view','id'=>$model->id_mahasiswa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mahasiswa', 'url'=>array('index')),
	array('label'=>'Create Mahasiswa', 'url'=>array('create')),
	array('label'=>'View Mahasiswa', 'url'=>array('view', 'id'=>$model->id_mahasiswa)),
	array('label'=>'Manage Mahasiswa', 'url'=>array('admin')),
);
?>

<h1>Update Mahasiswa <?php echo $model->id_mahasiswa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>