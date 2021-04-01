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

        <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/html.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">HTML</h5>
                       <p class="card-text">The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/css.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">CSS</h5>
                       <p class="card-text">Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/js.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">JavaScript</h5>
                       <p class="card-text">JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/bs.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Bootstrap</h5>
                       <p class="card-text">Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development..</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/php1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">PHP</h5>
                       <p class="card-text">PHP is a general-purpose scripting language especially suited to web development.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Laravel</h5>
                       <p class="card-text">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the MVC Pattern.</p>
                        
                    </div>
                </div>
            </div>
            
         
        </div>


     </div>

@endsection