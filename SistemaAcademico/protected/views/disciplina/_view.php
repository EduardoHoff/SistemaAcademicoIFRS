<?php
/* @var $this DisciplinaController */
/* @var $data Disciplina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
	<?php echo CHtml::encode($data->Curso->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creditos')); ?>:</b>
	<?php echo CHtml::encode($data->creditos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargaHorario')); ?>:</b>
	<?php echo CHtml::encode($data->cargaHorario." horas"); ?>
	<br />
	<br />

	<?php echo CHtml::link(CHtml::encode("Visualizar Disciplina"), array('view', 'id'=>$data->id)); ?>

</div>