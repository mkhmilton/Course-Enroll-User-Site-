@extends('layout.mainapp')
@section('title','UserProfile')


@section('content')

<div class="container">
 <div class="row" style="margin-top:45px">
 <div class="col-md-6 col-md-offset-3">
 @if(session('message'))
  <div class="alert alert-success">
    {{session('message')}}
  </div>
 @endif
 <h4>Profile</h4>
 <hr>
 
   <table class="table table-hover">
    <thead>
      <th>Name</th>
      <th>Email</th>
      <th>Status</th>
      <th>Action</th>
      <th></th>
    
    </thead>
    <tbody>
     <tr>
       <td>{{$LoggedUserInfo->name }}</td>
       <td>{{$LoggedUserInfo->email }}</td>
       <td>@if($LoggedUserInfo->status == 0)Inactive @else Active @endif</td>
       <td><a href="{{route('status',['id'=>$LoggedUserInfo->id]) }}">@if($LoggedUserInfo->status == 1)
       Inactive @else Active @endif</a></td>
       <td><a href="logout">Logout</a></td>
     
     </tr>
    
    
    </tbody>
   
   
   </table>
 </div>
 
 
 </div>


</div>


@endsection