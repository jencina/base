<?php
$this->breadcrumbs=array(
	'Modulo Posts'=>array('index'),
	$model->mod_post_id=>array('view','id'=>$model->mod_post_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ModuloPost','url'=>array('index')),
	array('label'=>'Create ModuloPost','url'=>array('create')),
	array('label'=>'View ModuloPost','url'=>array('view','id'=>$model->mod_post_id)),
	array('label'=>'Manage ModuloPost','url'=>array('admin')),
	);
	?>

	<h1>Update ModuloPost <?php echo $model->mod_post_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>