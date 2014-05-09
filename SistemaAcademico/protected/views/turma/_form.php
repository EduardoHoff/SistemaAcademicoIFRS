<?php
/* @var $this TurmaController */
/* @var $model Turma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turma-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_disciplina'); ?>
		<?php echo $form->textField($model,'id_disciplina'); ?>
		<?php echo $form->error($model,'id_disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pessoa'); ?>
		<?php echo $form->textField($model,'id_pessoa'); ?>
		<?php echo $form->error($model,'id_pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataInicio'); ?>
		<?php echo $form->dateField($model,'dataInicio'); ?>
		<?php echo $form->error($model,'dataInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataFinal'); ?>
		<?php echo $form->dateField($model,'dataFinal'); ?>
		<?php echo $form->error($model,'dataFinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo'); ?>
		<?php echo $form->textField($model,'periodo',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'periodo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->