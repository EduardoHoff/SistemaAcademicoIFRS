<?php
/* @var $this AulaController */
/* @var $model Aula */
date_default_timezone_set('America/Sao_Paulo');
$this->breadcrumbs=array(
	//'Aulas'=>array('index'),
	//'Create',
);

$this->menu=array(
	//array('label'=>'List Aula', 'url'=>array('index')),
	//array('label'=>'Manage Aula', 'url'=>array('admin')),
);
?>

<h1>Criar Aula</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>