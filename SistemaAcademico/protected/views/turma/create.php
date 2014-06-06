<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Editar Turmas', 'url'=>array('admin')),
);
?>

<h1>Criar Turma</h1>
<form name="form" method="POST">
		<?php
		$list=CHtml::listData(Curso::model()->findAll(), 'id', 'nome');
		$newlist = array_unique($list);
		asort($newlist);
		$drop = CHtml::dropDownList('id_curso', Curso::model()->nome, $newlist, array('empty' => 'Selecione um curso', 'value' => Curso::model()->id));
		echo $drop;
		?>
<button type="submit" name="botao" >Criar Turma</button>
</form>		


<?php  if(isset($_POST['botao']) and $_POST['id_curso'] != "") {
	 $this->renderPartial('_form', array('model'=>$model, 'curso'=>$_POST['id_curso']));
} 
?>