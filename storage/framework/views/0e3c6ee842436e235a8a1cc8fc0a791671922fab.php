<?php $__env->startSection('content'); ?>
<?php echo $__env->make('movie.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Pelicula actualizada correctamente.</strong>
	</div>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Año</th>
			<th>Dirección</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	    <?php echo Html::script('js/script2.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\MongoCine\resources\views/movie/index.blade.php ENDPATH**/ ?>