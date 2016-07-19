<?php
$this->breadcrumbs=array(
	'Modulo Posts',
);

$this->menu=array(
array('label'=>'Create ModuloPost','url'=>array('create')),
array('label'=>'Manage ModuloPost','url'=>array('admin')),
);
?>

<h1>Modulo Posts</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
