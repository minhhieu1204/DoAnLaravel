<?php $__env->startSection('content'); ?>
<div class="container " >
<?php $__currentLoopData = $arrays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="<?php echo e(route('newspaper.update',$news['id'])); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <label for="name">Name newspaper </label>
        <input type="text" name="name" value="<?php echo e($news['name']); ?>"> 
        <label for="description">Description</label>
        <input type="text" name="description" value="<?php echo e($news['description']); ?>">
        <label for="content">Content</label>
        <input type="text" name="content" value="<?php echo e($news['content']); ?>">
        <input type="submit" value="update">
    </form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Menu_Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\myproject\resources\views/pages/Home/edit.blade.php ENDPATH**/ ?>