<?php
/* @var $this MahasiswaController */
/* @var $data Mahasiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mahasiswa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mahasiswa), array('view', 'id'=>$data->id_mahasiswa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->id_jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nim')); ?>:</b>
	<?php echo CHtml::encode($data->nim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />


</div>