<?php
/* @var $this PostCommentsController */
/* @var $model PostComments */

$this->breadcrumbs=array(
	'Post Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PostComments', 'url'=>array('index')),
	array('label'=>'Create PostComments', 'url'=>array('create')),
	array('label'=>'View PostComments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PostComments', 'url'=>array('admin')),
);
?>

<h1>Update PostComments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>