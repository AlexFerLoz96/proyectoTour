

<?php $__env->startSection("title", "Inserción de categoria"); ?>

<?php $__env->startSection("header", "Inserción de categoria"); ?>

<?php $__env->startSection("content"); ?>
    <?php if(isset($categoria)): ?>
        <form action="<?php echo e(route('categoria.update', ['id' => $categoria->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form action="<?php echo e(route('categoria.store')); ?>" method="POST">
    <?php endif; ?>
        <?php echo csrf_field(); ?>
        Categoria name:<input type="text" name="nombre" value="<?php echo e($categoria->nombre ?? ''); ?>"><br>
        <input type="submit">
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/proyectos/proyectoTour/resources/views/categoria/create.blade.php ENDPATH**/ ?>