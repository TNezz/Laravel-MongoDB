<?php $__env->startSection('content'); ?>

<form class="form-group">
	<div class="alert alert-success alert-dismissible" id="msj-success" role="alert" style="display:none">Pelicula creado exitosamente</div>

	<?php echo $__env->make('movie.form.movie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<a class="btn btn-primary" href="#" id="registro">Registrar</a>
</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	    <?php echo Html::script('js/script.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\MongoCine\resources\views/movie/create.blade.php ENDPATH**/ ?>