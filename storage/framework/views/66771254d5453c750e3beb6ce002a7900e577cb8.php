

<?php $__env->startSection("title", "Modificación de modelo"); ?>

<?php $__env->startSection("header", "Modificación de modelo"); ?>

<?php $__env->startSection("content"); ?>
    <?php if(isset($modelo)): ?>
        <form action="<?php echo e(route('modelo.update', ['id' => $modelo->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form action="<?php echo e(route('modelo.store')); ?>" method="POST">
    <?php endif; ?>
        <?php echo csrf_field(); ?>
        Modelo ruta:<input type="text" name="ruta" value="<?php echo e($modelo->ruta ?? ''); ?>"><br>
        Descripcion: <input type="text" name="descripcion" value="<?php echo e($modelo->descripcion ?? ''); ?>"> <br>
        <input type="submit">
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/proyectos/proyectoTour/resources/views/modelo/edit.blade.php ENDPATH**/ ?>