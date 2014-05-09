<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	//'Turmas'=>array('index'),
	//$model->id,
);

$this->menu=array(
	//array('label'=>'List Aula', 'url'=>array('index')),
	//array('label'=>'Create Aula', 'url'=>array('create')),
	array('label'=>'Editar Aula', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Aula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Aula', 'url'=>array('admin')),
);
?>

<h1>Aula <?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		array(
                    'label' => $model->turma->getAttributeLabel('Turma'),
                    'value' => $model->turma->nome),
		array(
                    'label' => $model->getAttributeLabel('dataAula'),
                    'value' => date('d/m/Y', strtotime($model->dataAula))),
		'conteudo',
	),
)); ?>	