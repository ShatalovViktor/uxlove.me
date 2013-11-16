<?php
/* @var $this ProjectAbController */
/* @var $data ProjectAb */
?>

<div class="view">
        <?php echo CHtml::link(CHtml::encode('Изменить'), array('update', 'id'=>$data->id)); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('budget')); ?>:</b>
	<?php echo CHtml::encode($data->budget); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commission')); ?>:</b>
	<?php echo CHtml::encode($data->commission); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_a')); ?>:</b>
	<?php echo CHtml::encode($data->foto_a); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_b')); ?>:</b>
	<?php echo CHtml::encode($data->foto_b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start')); ?>:</b>
	<?php echo CHtml::encode($data->start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finish')); ?>:</b>
	<?php echo CHtml::encode($data->finish); ?>
	<br />

	*/ ?>

</div>