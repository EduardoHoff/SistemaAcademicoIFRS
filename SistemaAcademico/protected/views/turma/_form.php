<?php
/* @var $this TurmaController */
/* @var $model Turma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turma-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<br />
	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php if ($this->action->id == "create") { ?>	
		<div class="row">
			<?php echo $form->labelEx($model,'disciplina'); ?>
			<?php
			$criteria = new CDbCriteria;
			$criteria->condition = 'id_curso = :id_curso';
			$criteria->params = array(':id_curso'=>$curso);
					
			$list=CHtml::listData(Disciplina::model()->findAll($criteria), 'id', 'nome');
			$newlist = array_unique($list);
			asort($newlist);
			echo $form->dropDownList($model, 'id_disciplina', $newlist, array('value' => Disciplina::model()->id));
			?>
			<?php echo $form->error($model,'id_disciplina'); ?>
		</div>
	<?php } ?>	

	<div class="row">
		<?php echo $form->labelEx($model,'professor'); ?>
		<?php	
		$listProf=CHtml::listData(Pessoa::model()->findAll(), 'id', 'nome');
		$newlistProf = array_unique($listProf);
		asort($newlistProf);
		echo $form->dropDownList($model, 'id_pessoa', $newlistProf, array('value' => Pessoa::model()->id));
		?>
		<?php echo $form->error($model,'id_pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'periodo'); ?>
		<?php echo $form->textField($model,'periodo',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataInicio'); ?>
		<?php echo $form->dateField($model,'dataInicio'); ?>
		<?php echo $form->error($model,'dataInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataFinal'); ?>
		<?php echo $form->dateField($model,'dataFinal'); ?>
		<?php echo $form->error($model,'dataFinal'); ?>
	</div>
	<br/ >
	<div class="row">
		<?php    if (isset($diasSemana)):?>
			<?php echo $form->labelEx($model,'Dias de Aula'); ?>
			<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Segunda', 'name'=>'diasSemana[1]', 'checked'=>in_array('Segunda', $diasSemana)? 'checked':''));?> Segunda</label>
			<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Terca', 'name'=>'diasSemana[2]', 'checked'=>in_array('Terca', $diasSemana)? 'checked':''));?> Terça </label>
			<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Quarta', 'name'=>'diasSemana[3]', 'checked'=>in_array('Quarta', $diasSemana)? 'checked':''));?> Quarta </label>
			<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Quinta', 'name'=>'diasSemana[4]', 'checked'=>in_array('Quinta', $diasSemana)? 'checked':''));?> Quinta </label>
			<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Sexta', 'name'=>'diasSemana[5]', 'checked'=>in_array('Sexta', $diasSemana)? 'checked':''));?> Sexta </label>
			<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Sabado', 'name'=>'diasSemana[6]', 'checked'=>in_array('Sabado', $diasSemana)? 'checked':''));?> Sábado </label>
			<?php echo $form->error($model,'diasSemana'); ?>
			<?php else: ?>
				<?php echo $form->labelEx($model,'Dias de Aula'); ?>
				<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Segunda', 'name'=>'diasSemana[1]'));?> Segunda</label>
				<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Terca', 'name'=>'diasSemana[2]'));?> Terça </label>
				<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Quarta', 'name'=>'diasSemana[3]'));?> Quarta </label>
				<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Quinta', 'name'=>'diasSemana[4]'));?> Quinta </label>
				<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Sexta', 'name'=>'diasSemana[5]'));?> Sexta </label>
				<label> <?php echo $form->checkBox($model,'diasSemana', array('value'=>'Sabado', 'name'=>'diasSemana[6]'));?> Sábado </label>
				<?php echo $form->error($model,'diasSemana'); ?>
			<?php endif; ?>	
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->