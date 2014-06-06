<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	//'Aulas'=>array('index'),
	//'Manage',
);

/*$this->menu=array(
	array('label'=>'List Aula', 'url'=>array('index')),
	array('label'=>'Create Aula', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aula-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Aulas</h1>


<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aula-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'id_turma',
		'dataAula',
		'conteudo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
