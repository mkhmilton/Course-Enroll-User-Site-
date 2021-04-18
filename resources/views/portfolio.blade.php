@extends('layout.app')
@section('title','Portfolio')

@section('content')


<div class="container-fluid bg-dark">

    <div class="row p-4">
        <div class="col-md-12 text-center">
            <h4 class="text-white">MY PORTFOLIO</h4>
        </div>
    </div>
</div>




  <div class="container mt-3">
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
                       <p class="card-text">It is a system where customer view available car and booked car.</p>
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




@endsection