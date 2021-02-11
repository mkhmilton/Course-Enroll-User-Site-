@extends('layout.app')
@section('title','Login')

@section('content')



<div class="container-fluid bg-dark">

    <div class="row p-4">
        <div class="col-md-12 text-center">
            <h4 class="text-white">User Login</h4>
        </div>
    </div>
</div>
<div class="container mb-3 mt-3">

   <div class="row">

      <div class="col-lg-6 offset-lg-3"">
      <form action="{{ route('check') }}" method="post">
          @csrf  


                 <div class="results">
                   


                   @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>

                   @endif
                 
                 </div>
                    
                      <div class="form-group mb-3">
                      <label for="email" class="form-label">Email</label>
                       <input type="text" class="form-control" name="email" placeholder="Enter Your Email Here">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group mb-3">
                      <label for="password" class="form-label">Password</label>
                       <input type="password" class="form-control" name="password" placeholder="Enter Your Password Here">
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                 
                  <div class="text-center ">
                  <button type="submit" class="btn btn-primary btn-block btn-lg ">Submit</button>
                  </div>
                  <a class="btn btn-primary" href="{{url('reset')}}" role="button">Reset Password</a>
                  <br><br>
                  <a href="register">Create an New Account Now!</a>
                 
                </form>
      </div>
   </div>
</div>

@endsection