<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patronymic'); ?>
		<?php echo $form->textField($model,'patronymic',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'patronymic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>22,'maxlength'=>22)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>
<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'balance_likes'); ?>
		<?php //echo $form->textField($model,'balance_likes'); ?>
		<?php //echo $form->error($model,'balance_likes'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'balance_bn'); ?>
		<?php //echo $form->textField($model,'balance_bn'); ?>
		<?php //echo $form->error($model,'balance_bn'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textArea($model,'occupation',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>
<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'rating'); ?>
		<?php //echo $form->textField($model,'rating'); ?>
		<?php //echo $form->error($model,'rating'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'fb_id'); ?>
		<?php echo $form->textField($model,'fb_id',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'fb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vk_id'); ?>
		<?php echo $form->textField($model,'vk_id',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'vk_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tw_id'); ?>
		<?php echo $form->textField($model,'tw_id',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'tw_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_id'); ?>
		<?php echo $form->textField($model,'g_id',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'g_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->