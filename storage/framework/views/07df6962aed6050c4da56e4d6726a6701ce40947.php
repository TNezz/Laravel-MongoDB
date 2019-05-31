<?php $__env->startSection('content'); ?>

	<form action="/usuario" method="POST">
		<?php echo csrf_field(); ?>
		<div class="form-group">
			<label>Nombre</label>
			<input name="name" type="text" class="form-control" placeholder="Ingrese el nombre de usuario"></input>
		</div>
		<div class="form-group">
			<label>Correo</label>
			<input name="email" type="text" class="form-control" placeholder="Ingrese el correo del usuario"></input>
		</div>
		<div class="form-group">
			<label>Contraseña</label>
			<input name="password" type="password" class="form-control" placeholder="Ingrese la contraseña del usuario"></input>
		</div>
		<button class="btn btn-primary">Registrar</button>
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\MongoCine\resources\views/usuario/create.blade.php ENDPATH**/ ?>