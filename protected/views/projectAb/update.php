<?php
/* @var $this ProjectAbController */
/* @var $model ProjectAb */

$this->breadcrumbs=array(
	'Project Abs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectAb', 'url'=>array('index')),
	array('label'=>'Create ProjectAb', 'url'=>array('create')),
	array('label'=>'View ProjectAb', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectAb', 'url'=>array('admin')),
);
?>

<h1>Update ProjectAb <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>