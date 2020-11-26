<?php $__env->startSection('content'); ?>
<div class="container " >
    <form action="<?php echo e(route('newspaper.update',['id'=>$id])); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <label for="title">$Title </label>
        <input type="text" name="title" value="<?php echo e($tieude); ?>"> 
        <label for="time">Time post</label>
        <input type="text" name="time" value="<?php echo e($time); ?>">
        <label for="description">Description</label>
        <input type="text" name="description" value="<?php echo e($mota); ?>">
        <label for="description">Content</label>
        <input type="text" name="content" value="<?php echo e($noidung); ?>">
        <input type="submit" value="update">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Menu_Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\my_project\resources\views/pages/Home/edit.blade.php ENDPATH**/ ?>