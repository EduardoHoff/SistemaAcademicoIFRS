<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Criar Turma', 'url'=>array('create')),
	array('label'=>'Visualizar Turma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Editar Turmas', 'url'=>array('admin')),
);
?>

<h1>Editar Turma <?php echo $model->nome; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'diasSemana'=>$diasSemana)); ?>