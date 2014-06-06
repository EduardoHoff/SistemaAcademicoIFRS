<?php
/* @var $this AulaController */
/* @var $model Aula */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aula-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php if (isset($_GET['turma'])) {  ?>
	
				<div class="row">
					<?php echo $form->labelEx($model,'id_turma'); ?>
					<?php echo $form->textField($model,'id_turma', array('value' => $_GET['turma'])); ?>
					<?php echo $form->error($model,'id_turma'); ?>
				</div>
		

	<div class="row">
		<?php echo $form->labelEx($model,'dataAula'); ?>
		<?php echo $form->dateField($model,'dataAula', array('value' => date("Y-m-d"))); ?>
		<?php echo $form->error($model,'dataAula'); ?>
	</div>

	<?php } else{ ?>
				<div class="row">
					<?php echo $form->labelEx($model,'dataAula'); ?>
					<?php echo $form->dateField($model,'dataAula'); ?>
					<?php echo $form->error($model,'dataAula'); ?>
				</div>
	<?php } ?>
	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->