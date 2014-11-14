<?php
/* @var $this PostCommentsController */
/* @var $model PostComments */

$this->breadcrumbs=array(
	'Post Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PostComments', 'url'=>array('index')),
	array('label'=>'Manage PostComments', 'url'=>array('admin')),
);
?>

<h1>Create PostComments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>