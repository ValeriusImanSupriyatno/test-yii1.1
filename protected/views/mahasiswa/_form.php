<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'mahasiswa-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'id_jurusan'); ?>
        <?php echo $form->dropDownList($model, 'id_jurusan', Jurusan::model()->getOptions(), array('empty' => '--Select Option--')) ?>
        <?php echo $form->error($model, 'id_jurusan'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'nim'); ?>
        <?php echo $form->textField($model, 'nim', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'nim'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'nama'); ?>
        <?php echo $form->textField($model, 'nama', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'jenis_kelamin'); ?>
        <?php echo $form->dropDownList($model, 'jenis_kelamin', array('L' => 'Laki-laki', 'P' => 'Perempuan'), array('empty' => '--Select Option--')); ?>
        <?php echo $form->error($model, 'jenis_kelamin'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tanggal_lahir'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'attribute'=>'tanggal_lahir',
            'name' => 'tanggal_lahir',
            'value' => $model->tanggal_lahir,
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat' => 'yy-mm-dd',
            ),
        )); ?>
        <?php echo $form->error($model, 'tanggal_lahir'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'active'); ?>
        <?php echo $form->dropDownList($model, 'is_active', array('Y' => 'Yes', 'N' => 'No'), array('empty' => '--Select Option--')); ?>
        <?php echo $form->error($model, 'is_active'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->