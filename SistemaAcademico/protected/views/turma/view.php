<?php
/* @var $this TurmaController */
/* @var $model Turma */
/*
*/

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	$model->nome,
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Criar Turma', 'url'=>array('create')),
	array('label'=>'Editar Turma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Turma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Editar Turmas', 'url'=>array('admin')),
);
?>

<h1>Turma <?php echo $model->nome; ?></h1>
<?php $ex = explode(",", $model->diasSemana);
$ex = array_unique($ex);
$pos = array_search('0', $ex);
unset($ex[$pos]);
$im = implode(", ", $ex);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
                    'label' => $model->disciplina->getAttributeLabel('Disciplina'),
                    'value' => $model->disciplina->nome),
		array(
                    'label' => $model->pessoa->getAttributeLabel('Professor'),
                    'value' => $model->pessoa->nome),
		'nome',
		array(
                    'label' => $model->getAttributeLabel('dataInicio'),
                    'value' => date('d/m/Y', strtotime($model->dataInicio))),
		array(
                    'label' => $model->getAttributeLabel('dataFinal'),
                    'value' => date('d/m/Y', strtotime($model->dataFinal))),
		array(
                    'label' => $model->getAttributeLabel('dia(s) da Semana'),
                    'value' => $im),
		'periodo',
	),
)); ?>
<br>
<button onclick="window.location='http://localhost/SistemaAcademico/index.php?r=aula&turma=<?php echo $model->id; ?>';">Gerenciar Aulas</button>