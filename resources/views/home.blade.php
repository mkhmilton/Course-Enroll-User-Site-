@extends('layout.app')
@section('title','Homepage')


@section('content')
  <div class="container-fluid hero-image mb-5">
     <div class="row d-flex justify-content-center ">
     
         <div class="col-md-6 top-div text-center">
            <h1 class="text-white"><marquee behavior="" direction="">Learn Development With Milton</marquee></h1>
            <h3  class="text-white"><marquee behavior="" direction="right">[Full-Stack Web Development]</marquee></h3>
            <a href="{{url('login')}}" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Login</a>
            
         </div>
     </div>
  
  
  </div>

 



  <div class="container text-center mt-5">
      <h2>My Courses</h2><br>
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
                       <p class="card-text">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the MVC pattern.</p>
                        
                    </div>
                </div>
            </div>
            
         
     </div>
  </div>











  <div class="container text-center mt-5">
      <h2>My Projects</h2><br>
     <div class="row">

     <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/money.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Monthly Cost Calculation</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/car.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Car Rental</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/pos.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Point of Sell Management</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>
     </div>
  </div>

   
   
  <div class="container text-center mb-5 mt-5">
       <h2>Contact with Me</h2><br>
      <div class="row">
          <div class="col-md-6">
          <form>
                   <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Your Name</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Your Mobile No</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Your Message</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                 
                
                 <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>
          </div>
          <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14607.154223608788!2d90.37277772936474!3d23.754918403392594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8aee415661b%3A0x2dd630b66ac26c3b!2sWest%20Rajabazar%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1616854784045!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
      </div>
  </div>

@endsection
