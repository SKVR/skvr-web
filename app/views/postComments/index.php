<?php
/* @var $this PostCommentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Post Comments',
);

$this->menu=array(
	array('label'=>'Create PostComments', 'url'=>array('create')),
	array('label'=>'Manage PostComments', 'url'=>array('admin')),
);
?>

<h1>Post Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
