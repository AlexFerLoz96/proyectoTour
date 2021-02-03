

<?php $__env->startSection("title", "Users"); ?>

<?php $__env->startSection("header", "Users"); ?>

<?php $__env->startSection("content"); ?>
    <a href="<?php echo e(route('user.create')); ?>">New</a>
    <table border='1'>
    <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td><a href="<?php echo e(route('user.edit', $user->id)); ?>">Edit</a></td>
            <td>
                <form action = "<?php echo e(route('user.destroy', $user->id)); ?>" method="POST" id="delete<?php echo e($user->id); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input type="button"  onclick="question(<?php echo e($user->id); ?>)" value="Delete">
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
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/proyectos/proyectoTour/resources/views/user/index.blade.php ENDPATH**/ ?>