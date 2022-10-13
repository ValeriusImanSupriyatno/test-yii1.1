<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	$model->id_mahasiswa,
);

$this->menu=array(
	array('label'=>'List Mahasiswa', 'url'=>array('index')),
	array('label'=>'Create Mahasiswa', 'url'=>array('create')),
	array('label'=>'Update Mahasiswa', 'url'=>array('update', 'id'=>$model->id_mahasiswa)),
	array('label'=>'Delete Mahasiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mahasiswa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mahasiswa', 'url'=>array('admin')),
);
?>

<h1>View Mahasiswa #<?php echo $model->id_mahasiswa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mahasiswa',
		'id_jurusan',
		'nim',
		'nama',
		'jenis_kelamin',
		'tanggal_lahir',
		'is_active',
	),
)); ?>
