<?php
$this->breadcrumbs=array(
	'Modulo Posts'=>array('index'),
	$model->mod_post_id,
);

$this->menu=array(
array('label'=>'List ModuloPost','url'=>array('index')),
array('label'=>'Create ModuloPost','url'=>array('create')),
array('label'=>'Update ModuloPost','url'=>array('update','id'=>$model->mod_post_id)),
array('label'=>'Delete ModuloPost','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->mod_post_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ModuloPost','url'=>array('admin')),
);
?>

<h1>View ModuloPost #<?php echo $model->mod_post_id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'mod_post_id',
		'mod_post_titulo',
		'mod_post_fechacreacion',
		'mod_post_fechamodificacion',
		'mod_post_asignado_usu_id',
),
)); ?>
