@extends('layouts.Menu_Footer')
@section('content')

<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-top-menu" >
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">

                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" style="background-color:#00c292;" class="nav-link dropdown-toggle" style="color:green"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <form action="{{route('newspaper.search')}}" style="background-color:#00c292;" method="GET">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input style="background-color:#00c292;color:white;" type="text"  name="query"/>
                                    </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>
<div>
<a href="{{route('newspaper.create')}}"><button type="button" class="btn btn-primary btn-sm">Create</button></a>
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
      </tr>
    </thead>
    <tbody>
    @foreach($arrays as $baiviet)
        <tr>
           <td> <a  href="{{route('newspaper.detail',$baiviet['id'])}}">{{$baiviet['tieude']}}</a></td>
            <td>{{$baiviet['thoigian']}}</td>
            <td>{{$baiviet['mota']}}</td>
            <td> <textarea name="" id="" cols="30" rows="10">{{$baiviet['noidung']}}</textarea> </td>
            <td><img src="{{ asset ('img/upload/'.$baiviet['hinhanh'])  }}" alt=""></td>
            <td>{{$baiviet['luotlike']}}</td>
            <td>{{$baiviet['trangthai']}}</td>
            <td>{{$baiviet->chuyenMuc->tenchuyenmuc }}</td>
            @if(!in_array($baiviet['id'],$tinnong))
                <td><a href="{{route('newspaper.add',$baiviet['id'])}}"><button type="button" class="btn btn-primary btn-sm">Tin Hot</button></a></td>
            @else
                <td><a href=""></a></td>
            @endif 
            <td><a href="{{route('newspaper.edit',$baiviet['id'])}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <form action="{{route('newspaper.destroy',$baiviet['id'])}}" method="POST">
                @csrf
                @method('DELETE')
               <button  type="submit" class="btn btn-primary btn-sm" >Delete</button>
                </form> 
            </td>
        </tr> 
    </tbody>
    @endforeach
 </table>
 <div class="container">
     <ul class="pagination">
         {{ $arrays->appends(['query'=>$search])->links()  }}
     </ul>
 </div>
@endsection