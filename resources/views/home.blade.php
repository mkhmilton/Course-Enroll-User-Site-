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
            

  <div class="container text-center mt-5">
      <h2>My Projects</h2><br>
     <div class="row">

     <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/money.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Monthly Cost Calculation</h5>
                       <p class="card-text">A system where people can easily keep track of how much money they spend each month and how much money they earn each month and how much money they save.</p>
                       <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/car.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Car Rental</h5>
                       <p class="card-text">It is an online system where customer view available car and booked car.</p>
                       <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/pos.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Point of Sell Management</h5>
                       <p class="card-text">A point of sale system, or POS, is the place where your customer makes a payment for products or services at your store.</p>
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
