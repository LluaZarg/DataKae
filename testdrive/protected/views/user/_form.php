<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userName'); ?>
		<?php echo $form->textField($model,'userName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'userName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwordHash'); ?>
		<?php echo $form->passwordField($model,'passwordHash',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'passwordHash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailAddress'); ?>
		<?php echo $form->textField($model,'emailAddress',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'emailAddress'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->