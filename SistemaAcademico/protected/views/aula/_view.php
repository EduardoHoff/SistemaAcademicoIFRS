<?php

/* @var $this AulaController */
/* @var $data Aula */

?>

	<div class="view">
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('Turma')); ?>:</b>
		<?php echo CHtml::encode($data->turma->nome); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('dataAula')); ?>:</b>
		<?php echo CHtml::encode(date('d/m/Y', strtotime($data->dataAula))); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
		<?php echo CHtml::encode($data->conteudo); ?>
		<br />
		<br />
		
		<?php echo CHtml::link(CHtml::encode("Visualizar Aula"), array('view', 'id'=>$data->id)); ?>
		
	</div>
