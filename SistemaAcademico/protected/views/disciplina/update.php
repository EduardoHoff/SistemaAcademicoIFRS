<?php
/* @var $this DisciplinaController */
/* @var $model Disciplina */

$this->breadcrumbs=array(
	'Disciplinas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Disciplinas', 'url'=>array('index')),
	array('label'=>'Criar Disciplina', 'url'=>array('create')),
	array('label'=>'Visualizar Disciplina', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Editar Disciplinas', 'url'=>array('admin')),
);
?>

<h1>Editar Disciplina <?php echo $model->nome; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>