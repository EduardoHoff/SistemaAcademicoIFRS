<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */

$this->breadcrumbs=array(
	'Disciplinas'=>array('index'),
	$model->nome,
);

$this->menu=array(
	array('label'=>'Listar Disciplinas', 'url'=>array('index')),
	array('label'=>'Criar Disciplina', 'url'=>array('create')),
	array('label'=>'Editar Disciplina', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Disciplina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Editar Disciplinas', 'url'=>array('admin')),
);
?>

<h1>Disciplina <?php echo $model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
                    'label' => $model->getAttributeLabel('Curso'),
                    'value' => $model->Curso->nome),
		'nome',
		'creditos',
		'cargaHorario',
	),
)); ?>
