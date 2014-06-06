<?php
/* @var $this TurmaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Turmas',
);

$this->menu=array(
	array('label'=>'Criar Turma', 'url'=>array('create')),
	array('label'=>'Editar Turmas', 'url'=>array('admin')),
);
?>


<h1>Turmas</h1>



<form name="form" method="POST">
<?php
$list2=CHtml::listData(Curso::model()->findAll(), 'id', 'nome');
$newlist2 = array_unique($list2);
asort($newlist2);
$drop = CHtml::dropDownList('id_curso', Curso::model()->nome, $newlist2, array('empty' => 'Selecione um curso', 'value' => Curso::model()->id));
echo $drop;
?>
<br />
<?php
$list=CHtml::listData(Turma::model()->findAll(), 'id', 'periodo');
$newlist = array_unique($list);
$drop = CHtml::dropDownList('periodo', Turma::model()->periodo, $newlist, array('empty' => 'Selecione um período letivo'));
echo $drop;
?>


<br />
<button type="submit" name="botao" >Exibir turmas</button>
</form>

<?php  if(isset($_POST['botao']) and $_POST['periodo'] != "" and $_POST['id_curso'] != "") {
		?> <br><h3> <?php echo "Curso: ".$newlist2[$_POST['id_curso']]; ?> </h3> <?php
		?> <h3> <?php echo "Periodo: ".$newlist[$_POST['periodo']]; ?> </h3> <?php
		
		$dataProvider = new CActiveDataProvider('turma',array(
			'pagination'=>false,
            'criteria'=>array(
                'condition'=>'periodo = "'.$newlist[$_POST['periodo']].'"',
      
            ),
            
        ));
		$this->widget('zii.widgets.CListView', array(
			'itemView'=> '_view',
			'viewData' => array('idCurso' => $_POST['id_curso']),
			'dataProvider'=>$dataProvider,
			'template' => '{items}{pager}',
			  
		)); 
		
}