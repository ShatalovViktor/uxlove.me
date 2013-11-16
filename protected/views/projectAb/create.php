<?php
/* @var $this ProjectAbController */
/* @var $model ProjectAb */

$this->breadcrumbs=array(
	'Project Abs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectAb', 'url'=>array('index')),
	array('label'=>'Manage ProjectAb', 'url'=>array('admin')),
);
?>

<h1>Create ProjectAb</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>