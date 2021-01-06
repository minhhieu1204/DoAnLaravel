@extends('layouts.Menu_Footer')
@section('content')

<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-top-menu" >
                        <ul class="nav navbar-nav notika-top-nav">
                            <li >
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="btn btn-primary btn-sm" ><i class="notika-icon notika-search"></i></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <form action="{{route('newspaper.search')}}" method="GET">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text"  name="query"/>
                                    </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>
  <h1>Đây là Trang chủ.</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
      <th>Title </th>
        <th>Time Post</th>
        <th>Decription</th>
        <th>Content</th>
        <th>Image</th>
        <th>Likes</th>
        <th>Status</th>
        <th>Category</th>
        <th>Decription</th>
      </tr>
    </thead>
    <tbody>
    @foreach($arrays as $baiviet)
        <tr>
           <td> <a  href="{{route('newspaper.detail',$baiviet['id'])}}">{{$baiviet['tieude']}}</a></td>
            <td>{{$baiviet['thoigian']}}</td>
            <td>{{$baiviet['mota']}}</td>
            <td><textarea style="width:400px; height:100px;">{{$baiviet['noidung']}}</textarea></td>
            <td><img src="{{ asset ('img/upload/'.$baiviet['hinhanh'])  }}" alt=""></td>
            <td>{{$baiviet['luotlike']}}</td>
            <td>{{$baiviet['trangthai']}}</td>
            <td>{{$baiviet->chuyenMuc->tenchuyenmuc }}</td>
            <td><a href="{{route('newspaper.create')}}"><button type="button" class="btn btn-primary btn-sm">Create</button></a></td>
            <td><a href="{{route('newspaper.edit',$baiviet['id'])}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="{{route('newspaper.destroy',$baiviet['id'])}}" method="POST">
                @csrf
                @method('DELETE')
               <button name="btn_search" type="submit" class="btn btn-primary btn-sm" >Delete</button>
                </form> 
            </td>
        </tr> 
    </tbody>
    @endforeach
 </table>
 <div class="container">      
  <ul class="pagination">
  {!! $arrays->links() !!}
  </ul>
</div>
@endsection