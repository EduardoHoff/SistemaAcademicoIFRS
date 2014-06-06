<?php
/* @var $this DisciplinaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Disciplinas',
);

$this->menu=array(
	array('label'=>'Criar Disciplina', 'url'=>array('create')),
	array('label'=>'Editar Disciplinas', 'url'=>array('admin')),
);
?>

<h1>Disciplinas</h1>

<form name="form" method="POST">
<?php
$list=CHtml::listData(Curso::model()->findAll(), 'id', 'nome');
$newlist = array_unique($list);
$drop = CHtml::dropDownList('nome', Curso::model()->id, $newlist, array('empty' => 'Selecione um curso'));
echo $drop;
?>

<button type="submit" name="botao" >Exibir disciplinas</button>
</form>

<?php if(isset($_POST['botao']) and $_POST['nome'] != "") {
		?> <br><h3> <?php echo "Curso: ".$newlist[$_POST['nome']]; ?> </h3> <?php
		$dataProvider = new CActiveDataProvider('disciplina',array(
			'pagination'=>false,
            'criteria'=>array(
                'condition'=>'id_curso = "'.$_POST['nome'].'"',

            ),

        ));
		$this->widget('zii.widgets.CListView', array(
			'itemView'=> '_view',
			'dataProvider'=>$dataProvider,
			
		));
	
}

?>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */ ?>
