<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs = array(
    'Mahasiswas' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Mahasiswa', 'url' => array('index')),
    array('label' => 'Create Mahasiswa', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mahasiswa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mahasiswas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mahasiswa-grid',
    'dataProvider' => $model->allDataMahasiswa(),
    'filter' => $model,
    'columns' => array(
        'nim',
        'nama',
        array(
            'header' => '<font color="white">Jenis Kelamin</font>',
            'name' => 'jenis_kelamin',
            'value' => function ($data) {
                if (isset($data->jenis_kelamin))
                    return $data->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan';
                else
                    return "";
            },
            'type' => 'raw',
        ),
        'tanggal_lahir',
        array(
            'header' => '<font color="white">Nama Jurusan</font>',
            'name' => 'nama_jurusan',
            'value' => function ($data) {
                if (isset($data->nama_jurusan))
                    return $data->nama_jurusan;
                else
                    return "";
            },
            'type' => 'raw',
        ),
        /*
        'is_active',
        */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
)); ?>
