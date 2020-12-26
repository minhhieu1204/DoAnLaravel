@extends('layouts.Menu_Footer')
@section('content')
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-top-menu" >
                        <ul class="nav navbar-nav notika-top-nav">
                            <li >
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="btn btn-primary btn-sm" ><i class="notika-icon notika-search"></i></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <form action="{{route('newspaper.searchReplyApp')}}" method="GET">
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
  <h1>Trang phản hồi người dùng</h1>
</div>
<table class="table"> 
    <thead>
      <tr>
        <th>Titel </th>
        <th>Time Post</th>
        <th>decription</th>
      </tr>

    </thead>
    <tbody>
    @foreach($arrays as $phanhoi)
        <tr>
            <td>{{$phanhoi['noidung']}}</td>
            <td>{{$phanhoi->user->username}}</td>
            <td>
                <form action="{{route('newspaper.destroyReplyApp',$phanhoi['id'])}}" method="POST">
                @csrf
                @method('DELETE')
               <button  type="submit" class="btn btn-primary btn-sm" >Delete</button>
                </form> 
            </td>
        </tr> 
    </tbody>
    @endforeach
 </table>
@endsection