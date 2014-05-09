<?php
/* @var $this TurmaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Turmas',
);
/*
$this->menu=array(
	array('label'=>'Create Turma', 'url'=>array('create')),
	array('label'=>'Manage Turma', 'url'=>array('admin')),
);*/
?>


<h1>Turmas</h1>



<form name="form" method="POST">
<?php
$list=CHtml::listData(Turma::model()->findAll(), 'id', 'periodo');
$newlist = array_unique($list);
$drop = CHtml::dropDownList('periodo', Turma::model()->periodo, $newlist, array('empty' => 'Selecione um período letivo'));
echo $drop;
?>
<button type="submit" name="botao" >Exibir turmas</button>
</form>

<?php if(isset($_POST['botao']) and $_POST['periodo'] != "") {
		?> <br><h3> <?php echo "Periodo: ".$newlist[$_POST['periodo']]; ?> </h3> <?php
		$dataProvider = new CActiveDataProvider('turma',array(
            'criteria'=>array(
                'condition'=>'periodo = "'.$newlist[$_POST['periodo']].'"',
            ),

        ));
		$this->widget('zii.widgets.CListView', array(
			'itemView'=> '_view',
			'dataProvider'=>$dataProvider,
			
		));

			
}

