@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
    <form action="{{route('newspaper.update',$baiviet['id'])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{$baiviet['tieude']}}" class="form-control"> 
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" value="{{$baiviet['mota']}}" class="form-control">
        </div >

		<div class="form-group">
            <label for="file">Image</label>
			<input type="file" accept="*.jpg|*.png|*.jpeg" onchange="loadFile(event)" value="null" name="file" class="form-control">
        </div>

		<input type="hidden"  name="file_old" value="{{$baiviet['hinhanh']}}">

		<div  class="form-group">
                <img src="{{ asset ('img/upload/'.$baiviet['hinhanh'])}}" style="width:25%" id="imgsp" class="img-thumbnail" alt="no img" />
            </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" cols="40" rows="5" id="noidung" value="{{$baiviet['noidung']}}" class="form-control">{{$baiviet['noidung']}}</textarea>
        </div>
		
		<div class="form-group">
			<label for="loai">Choose a car:</label><br>
            <select class="form-control" style="width:20%" name="category" id="loai">
			<?php $chuyenmuc = App\ChuyenMuc::all(); ?>
			@foreach($chuyenmuc as $i)
                <option value="{{$i['id']}}" <?php if($baiviet['chuyenmuc_id']==$i['id'] ) 
                    echo 'selected'; ?> > {{$i['tenchuyenmuc']}} </option>
			@endforeach
		</select>
        </div>
        <input type="submit" value="Update">
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
</div>
<script>

	var loadFile = function(event) {
		var image = document.getElementById('imgsp');
		image.src = URL.createObjectURL(event.target.files[0]);
	};

</script>
@endsection