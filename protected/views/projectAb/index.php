<?php
/* @var $this ProjectAbController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Project Abs',
);

?>
<a href="create/">Создать проект </a>
<h1>Project Abs</h1>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
