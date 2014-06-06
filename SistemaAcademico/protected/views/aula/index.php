<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<?php

/* @var $this AulaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	//'Aulas',
);


$this->menu=array(
	//array('label'=>'Create Aula', 'url'=>array('create')),
	//array('label'=>'Editar Aulas', 'url'=>array('admin')),
); 
?>

<h1>Aulas</h1>
<?php
$turma = Turma::model()->findByPK($_GET['turma']);

if((strtotime($turma->dataInicio) < time()) and (strtotime($turma->dataFinal) > time())){

?>

<button onclick="window.location='http://localhost/SistemaAcademico/index.php?r=aula/create&turma=<?php echo $_GET['turma'];?>';">Nova Aula</button>

<?php 
} ?>

<?php

	$dataProvider = new CActiveDataProvider('aula',array(
        'criteria'=>array(
            'condition'=>'id_turma = "'.$_GET['turma'].'"',
        ),
      
    ));
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	//'viewData' => array('fakeID' => getId()),
	'itemView'=>'_view',
	)); ?>