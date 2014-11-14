<?php
/* @var $this PostCommentsController */
/* @var $model PostComments */

$this->breadcrumbs=array(
	'Post Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PostComments', 'url'=>array('index')),
	array('label'=>'Create PostComments', 'url'=>array('create')),
	array('label'=>'Update PostComments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PostComments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PostComments', 'url'=>array('admin')),
);
?>

<h1>View PostComments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'post_id',
		'content',
	),
)); ?>
