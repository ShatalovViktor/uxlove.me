<?php
/* @var $this ProjectAbController */
/* @var $model ProjectAb */

$this->breadcrumbs=array(
	'Project Abs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProjectAb', 'url'=>array('index')),
	array('label'=>'Create ProjectAb', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#project-ab-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Project Abs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'project-ab-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'budget',
		'cost',
		'commission',
		'content',
		/*
		'foto_a',
		'foto_b',
		'created',
		'start',
		'finish',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
