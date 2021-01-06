@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
    <form action="{{route('newspaper.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control"> 
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control">
        </div >

		<div class="form-group">
            <label for="file">Image</label>
			<input type="file"  accept="*.jpg|*.png|*.jpeg" name="file" onchange="loadFile(event)" class="form-control">
        </div>

		<div  class="form-group">
                <img src="" style="width:25%" id="imgsp" class="img-thumbnail" alt="no img" />
            </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" cols="40" rows="5" id="noidung" class="form-control"></textarea>
        </div>
		
		<div class="form-group">
			<label for="loai">Choose a car:</label><br>
            <select class="form-control" style="width:20%" name="category" id="loai">
			<?php $chuyenmuc = App\ChuyenMuc::all(); ?>
			@foreach($chuyenmuc as $i)
				<option value="{{$i['id']}}"> {{$i['tenchuyenmuc']}} </option>
			@endforeach
		</select>
        </div>
        <input type="submit" value="create">
    </form>
    <script src="{{asset ('js/ckeditor/ckeditor.js')}}"></script>
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

<script>

	var loadFile = function(event) {
		var image = document.getElementById('imgsp');
		image.src = URL.createObjectURL(event.target.files[0]);
	};

</script>
</div>
@endsection