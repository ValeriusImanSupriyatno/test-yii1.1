<?php
/* @var $this BiodataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Biodatas',
);

$this->menu=array(
	array('label'=>'Create Biodata', 'url'=>array('create')),
	array('label'=>'Manage Biodata', 'url'=>array('admin')),
);
?>

<h1>Biodatas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
