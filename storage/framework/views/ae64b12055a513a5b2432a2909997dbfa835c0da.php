<html>
<head>
    <title><?php echo $__env->yieldContent('Titulo'); ?></title>
</head>
    <body>
        <?php $__env->startSection('sidebar'); ?>
        Este es mi master sidebar.
        <?php echo $__env->yieldSection(); ?>
        <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    </body>
</html><?php /**PATH /home/vagrant/proyectos/proyectoTour/resources/views/layouts/master.blade.php ENDPATH**/ ?>