<?php
/* @var $this ProjectAbController */
/* @var $model ProjectAb */

$this->breadcrumbs=array(
	'Project Abs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ProjectAb', 'url'=>array('index')),
	array('label'=>'Create ProjectAb', 'url'=>array('create')),
	array('label'=>'Update ProjectAb', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProjectAb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectAb', 'url'=>array('admin')),
);
?>

<h1>View ProjectAb #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'budget',
		'cost',
		'commission',
		'content',
		'foto_a',
		'foto_b',
		'created',
		'start',
		'finish',
	),
)); ?>
