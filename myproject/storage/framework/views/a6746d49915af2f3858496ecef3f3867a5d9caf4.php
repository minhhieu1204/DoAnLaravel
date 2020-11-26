<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('newspaper.store')); ?>" method="post">
        <?php echo csrf_field(); ?>

		
		
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control"> 
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control">
        </div >

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" cols="40" rows="5" id="noidung" class="form-control"></textarea>
        </div>
		
		<div class="form-group">
			<label for="loai">Choose a car:</label><br>
            <select class="form-control" style="width:20%" name="category" id="loai">
			<?php $chuyenmuc = App\ChuyenMuc::all(); ?>
			<?php $__currentLoopData = $chuyenmuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($i['id']); ?>"> <?php echo e($i['tenchuyenmuc']); ?> </option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
        </div>
        <input type="submit" value="create">
    </form>
    <script src="<?php echo e(asset ('js/ckeditor/ckeditor.js')); ?>"></script>
    <script>
    ClassicEditor.create( document.querySelector('#noidung'), {
				
				toolbar: {
					items: [
						'heading',
						'|',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'indent',
						'outdent',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'undo',
						'redo'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
				licenseKey: '',
				
			} )
			.then( editor => {
				window.editor = editor;

				
				
			} )
			.catch( error => {
				console.error( 'Oops, something went wrong!' );
				console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
				console.warn( 'Build id: irc9zhth9xs2-8o65j7c6blw0' );
				console.error( error );
			} );
    </script>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Menu_Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Download\Documents\Document\myproject\resources\views/pages/Home/create.blade.php ENDPATH**/ ?>