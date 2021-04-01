@extends('layout.app')
@section('title','Registration')


@section('content')



<div class="container-fluid bg-dark">

    <div class="row p-4">
        <div class="col-md-12 text-center">
            <h4 class="text-white">Registration</h4>
        </div>
    </div>
</div>

<div class="container mb-3 mt-3">

   <div class="row">

      <div class="col-lg-6 offset-lg-3"">
      <form action="{{ route('create')}}" method="post">
      @csrf

        <div class="results">
            @if(Session::get('success'))
              <div class="alert alert-success">
               {{Session:: get('success')}}
             
              </div>

            @endif

            @if(Session::get('fail'))
              <div class="alert alert-danger">
               {{Session:: get('fail')}}
             
              </div>

            @endif
        </div>



                   <div class="form-group mb-3">
                      <label for="name" class="form-label">Name</label>
                       <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group mb-3">
                      <label for="mobile" class="form-label">Mobile No</label>
                       <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile No">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group mb-3">
                      <label for="email" class="form-label">Email</label>
                       <input type="email" class="form-control" name="email" placeholder="Enter Your Email Here">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group mb-3">
                      <label for="password" class="form-label">Password</label>
                       <input type="password" class="form-control" name="password" placeholder="Enter Your Password Here">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                      <label for="BkashNo" class="form-label">Bkash Number</label>
                       <input type="number" class="form-control" name="BkashNo" placeholder="Enter Your Bkash No">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                      <label for="TrxId" class="form-label">Transaction Id</label>
                       <input type="text" class="form-control" name="TrxId" placeholder="Enter Your Bkash TrxID">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    
                 
                  <div class="text-center ">
                  <button type="submit" class="btn btn-primary btn-block btn-lg ">Submit</button>
                  </div>

                  <a href="login">I have already account!</a>
                 
                </form>
      </div>
   </div>
</div>




@endsection