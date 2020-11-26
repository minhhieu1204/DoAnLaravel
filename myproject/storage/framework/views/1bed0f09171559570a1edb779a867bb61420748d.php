<?php $__env->startSection('content'); ?>
<div class="container">
<div>
  <h1>Đây là Trang chủ.</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Name Newspaper </th>
        <th>Description</th>
        <th>Content</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $arrays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baiviet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
           <td> <a  href="<?php echo e(route('newspaper.detail',$baiviet['id'])); ?>"><?php echo e($baiviet['name']); ?></a></td>
            <td><?php echo e($baiviet['description']); ?></td>
            <td><?php echo e($baiviet['content']); ?></td>
            <td><a href="<?php echo e(route('newspaper.create')); ?>"><button type="button" class="btn btn-primary btn-sm">Create</button></a></td>
            <td><a href="<?php echo e(route('newspaper.edit',$baiviet['id'])); ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="<?php echo e(route('newspaper.destroy',$baiviet['id'])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
               <button  type="submit" class="btn btn-primary btn-sm" >Delete</button>
                </form> 
            </td>
        </tr> 
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Menu_Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\HK5\Web PHP\myproject\resources\views/pages/Home/index.blade.php ENDPATH**/ ?>