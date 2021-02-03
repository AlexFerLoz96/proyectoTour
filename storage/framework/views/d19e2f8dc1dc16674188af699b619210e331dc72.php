

<?php $__env->startSection("title", "Categorias"); ?>

<?php $__env->startSection("header", "Categorias"); ?>

<?php $__env->startSection("content"); ?>
    <a href="<?php echo e(route('categoria.create')); ?>">New</a>
    <table border='1'>
    <?php $__currentLoopData = $categoriaList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($categoria->nombre); ?></td>
            <td><a href="<?php echo e(route('categoria.edit', $categoria->id)); ?>">Edit</a></td>
            <td>
                <form action = "<?php echo e(route('categoria.destroy', $categoria->id)); ?>" method="POST" id="delete<?php echo e($categoria->id); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input type="button"  onclick="question(<?php echo e($categoria->id); ?>)" value="Delete">
                </form>
            </td>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar esta película?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/proyectos/proyectoTour/resources/views/categoria/index.blade.php ENDPATH**/ ?>