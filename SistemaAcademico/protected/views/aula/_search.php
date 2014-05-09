<?php
/* @var $this AulaController */
/* @var $model Aula */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Turma'); ?>
		<?php echo $form->textField($model,'id_turma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataAula'); ?>
		<?php echo $form->dateField($model,'dataAula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->