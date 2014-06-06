<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */

$this->breadcrumbs=array(
	'Disciplinas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Disciplinas', 'url'=>array('index')),
	array('label'=>'Editar Disciplinas', 'url'=>array('admin')),
);
?>

<h1>Criar Disciplina</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>