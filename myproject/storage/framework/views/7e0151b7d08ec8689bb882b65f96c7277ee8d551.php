<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('newspaper.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name newspaper </label>
            <input type="text" name="name" class="form-control"> 
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control">
        </div >

        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea name="content" cols="40" rows="5" class="form-control"></textarea>
        </div>
        <input type="submit" value="create">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Menu_Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\myproject\resources\views/pages/Home/create.blade.php ENDPATH**/ ?>