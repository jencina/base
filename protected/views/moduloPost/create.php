<?php
$this->breadcrumbs=array(
	'Modulo Posts'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ModuloPost','url'=>array('index')),
array('label'=>'Manage ModuloPost','url'=>array('admin')),
);
?>

<h1>Create ModuloPost</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>