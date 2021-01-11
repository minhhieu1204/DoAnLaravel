@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-top-menu" >
                        <ul class="nav navbar-nav notika-top-nav">
                            <li >
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="btn btn-primary btn-sm" ><i class="notika-icon notika-search"></i></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <form action="{{route('newspaper.searchReplyBaiViet')}}" method="GET">
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
<div>
  <h1>Đây là Trang reply.</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Titel </th>
        <th>Time Post</th>
        <th>Decription</th>
      </tr>

    </thead>
    <tbody>
    @foreach($arrays as $baocao)
        <tr>
            <td>{{$baocao['noidung']}}</td>
            <td>{{$baocao->user->username}}</td>
            <td>
                <form action="{{route('newspaper.destroyReplyBaiViet',$baocao['id'])}}" method="POST">
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
  {{ $arrays->links() }}
  </ul>
</div>
@endsection