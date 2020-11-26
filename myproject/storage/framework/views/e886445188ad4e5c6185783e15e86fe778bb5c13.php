<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('newspaper.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="title">Title </label>
        <input type="text" name="title">
        <label for="description">Description</label>
        <input type="text" name="description">
        <input type="submit" value="create">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Menu_Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\my_project\resources\views/pages/create.blade.php ENDPATH**/ ?>