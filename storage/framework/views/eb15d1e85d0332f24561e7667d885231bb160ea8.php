

<?php $__env->startSection("title", "Inserción de usuario"); ?>

<?php $__env->startSection("header", "Inserción de usuario"); ?>

<?php $__env->startSection("content"); ?>
    <?php if(isset($user)): ?>
        <form action="<?php echo e(route('user.update', ['id' => $user->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form action="<?php echo e(route('user.store')); ?>" method="POST">
    <?php endif; ?>
        <?php echo csrf_field(); ?>
        User name:<input type="text" name="name" value="<?php echo e($user->name ?? ''); ?>"><br>
        Email:<input type="text" name="email" value="<?php echo e($user->email ?? ''); ?>"><br>
        Password:<input type="password" name="password" value="<?php echo e($user->password ?? ''); ?>"><br>
        <input type="submit">
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/proyectos/proyectoTour/resources/views/user/create.blade.php ENDPATH**/ ?>