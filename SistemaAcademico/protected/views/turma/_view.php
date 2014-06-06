<?php
/* @var $this TurmaController */
/* @var $data Turma */
?>
<?php 

	if($data->disciplina->Curso->id == $idCurso) {

$dataInicio = $data->dataInicio;
$dataFinal = $data->dataFinal;
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('disciplina')); ?>:</b>
	<?php echo CHtml::encode($data->disciplina->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('professor')); ?>:</b>
	<?php echo CHtml::encode($data->pessoa->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataInicio')); ?>:</b>
	<?php echo CHtml::encode(date('d/m/Y', strtotime($data->dataInicio))); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataFinal')); ?>:</b>
	<?php echo CHtml::encode(date('d/m/Y', strtotime($data->dataFinal))); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo')); ?>:</b>
	<?php echo CHtml::encode($data->periodo); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
	<?php echo CHtml::encode($data->disciplina->Curso->nome); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('nível')); ?>:</b>
	<?php echo CHtml::encode($data->disciplina->Curso->tipo); ?>

	<?php if (time() > strtotime($dataFinal)) { ?>
				<br />
				<br />
				<?php echo "Turma Encerrada!"; ?>	
	<?php } ?>

	<br />
	<br />

	<?php echo CHtml::link(CHtml::encode("Visualizar Turma"), array('view', 'id'=>$data->id)); ?>
	
</div>

<?php } ?>