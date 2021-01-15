@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div>
  <h1>Đây là Trang chủ categorys.</h1>
</div>
<td><a href="{{route('hihi.create')}}"><button type="button" class="btn btn-primary btn-sm">Create</button></a></td>
<table class="table"> 
    <thead>
      <tr>
        <th>Tên chuyên mục </th>
      </tr>

    </thead>  
    <tbody>
      <br>
      <br>
      <form action="{{route('category.search')}}" style="display:flex; justify-content:center;">
        <h4>Search thể loại:</h4>
          <input type="text" name="query">&ensp;
          <button type="submit" class="fa fa-search">Search</button>
        </form>
    @foreach($dscategory as $ds)
        <tr>
            <td>{{$ds['tenchuyenmuc']}}</td>
            <td><a href="{{route('hihi.update',$ds['id'])}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="{{route('hihi.delete',$ds['id'])}}" method="POST">
                @csrf
                @method('DELETE')
               <button  type="submit" class="btn btn-primary btn-sm" >Delete</button>
                </form> 
            </td>
        </tr> 
    </tbody>
    @endforeach
  </table>
  </div>
  <div class="container">
    <ul class="pagination">
        {{ $dscategory->links() }}
    </ul>
  </div>
@endsection