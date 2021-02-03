

<?php $__env->startSection("title", "modelo"); ?>

<?php $__env->startSection("header", "modelo"); ?>

<?php $__env->startSection("content"); ?>
    <a href="<?php echo e(route('modelo.create')); ?>">New</a>
    <table border='1'>
    <?php $__currentLoopData = $modeloList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($modelo->ruta); ?></td>
            <td><?php echo e($modelo->descripcion); ?></td>
            <td><a href="<?php echo e(route('modelo.edit', $modelo->id)); ?>">Edit</a></td>
            <td>
                <form action = "<?php echo e(route('modelo.destroy', $modelo->id)); ?>" method="POST" id="delete<?php echo e($modelo->id); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input type="button"  onclick="question(<?php echo e($modelo->id); ?>)" value="Delete">
                </form>
            </td>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar este modelo 3D?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/proyectos/proyectoTour/resources/views/modelo/index.blade.php ENDPATH**/ ?>