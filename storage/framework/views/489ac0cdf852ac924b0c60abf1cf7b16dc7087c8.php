	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar pelicula</h4>
      </div>
      <div class="modal-body">

      	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="token">
      	<input type="hidden" id="id">
        <?php echo $__env->make('movie.form.movie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="modal-footer">
        <a href="#" id="actualizar" class="btn btn-primary">Actualizar</a>
      </div>
    </div>
  </div>
</div><?php /**PATH D:\xampp\htdocs\MongoCine\resources\views/movie/modal.blade.php ENDPATH**/ ?>