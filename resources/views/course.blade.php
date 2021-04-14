@extends('layout.app')
@section('title','Courses')
@section('content')



<div class="container-fluid bg-dark">

    <div class="row p-4">
        <div class="col-md-12 text-center">
            <h4 class="text-white">MY Courses</h4>
        </div>
    </div>
</div>

    <div class="container mt-3">
      
        <div class="row">

           @foreach($CourseData as $CourseData)
           <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{$CourseData->course_img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">{{$CourseData->course_name}}</h5>
                       <h6 class="card-text">{{$CourseData->course_des}}</h6>

                        
                    </div>
                </div>
            </div>

            @endforeach
            
@endsection