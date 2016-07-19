<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('mod_post_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mod_post_id),array('view','id'=>$data->mod_post_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_post_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->mod_post_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_post_fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->mod_post_fechacreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_post_fechamodificacion')); ?>:</b>
	<?php echo CHtml::encode($data->mod_post_fechamodificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_post_asignado_usu_id')); ?>:</b>
	<?php echo CHtml::encode($data->mod_post_asignado_usu_id); ?>
	<br />


</div>