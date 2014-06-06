<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'disciplina-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	
	
	<div class="row">
		<?php  echo $form->labelEx($model,'curso'); ?>
		<?php
		$list=CHtml::listData(Curso::model()->findAll(), 'id', 'nome');
		$newlist = array_unique($list);
		asort($newlist);
		echo $form->dropDownList($model, 'id_curso', $newlist, array('value' => Curso::model()->id));
		?>
		<?php  echo $form->error($model,'id_curso'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creditos'); ?>
		<?php echo $form->textField($model,'creditos'); ?>
		<?php echo $form->error($model,'creditos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargaHorario'); ?>
		<?php echo $form->textField($model,'cargaHorario'); ?>
		<?php echo $form->error($model,'cargaHorario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->