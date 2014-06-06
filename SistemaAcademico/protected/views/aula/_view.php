<?php

/* @var $this AulaController */
/* @var $data Aula */

?>
	<?php 	

	$dias = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",7 => "Domingo");


		$data2 = strtotime($data->dataAula);
		$dataExtenso = date('d/m/Y', $data2);
		$dataHoje= date('d/m/Y', time());
		$dataHojeTime = strtotime($dataHoje);


		if($data2 < $dataHojeTime) { ?>
			<div class="view2">
		<?php } else { 
					if ($data2 > $dataHojeTime ) { ?>
						<div class="view">
		<?php 		} else {
						if ($dataExtenso == $dataHoje) { ?> 
							<div class="view3"> 
		<?php 			}
					} 
			  } ?>

		

		<b><?php echo CHtml::encode($data->getAttributeLabel('Aula')); ?>:</b>
		<?php echo CHtml::encode($realIndex + 1); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('Turma')); ?>:</b>
		<?php echo CHtml::encode($data->turma->nome); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('dataAula')); ?>:</b>
		<?php echo CHtml::encode(date('d/m/Y', strtotime($data->dataAula))); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('Dia')); ?>:</b>
		<?php echo CHtml::encode($dias[date("N", strtotime($data->dataAula))]); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
		<?php echo CHtml::encode($data->conteudo); ?>
		<br />
		<br />
		
		<?php echo CHtml::link(CHtml::encode("Visualizar Aula"), array('view', 'id'=>$data->id)); ?>
		
	</div>
