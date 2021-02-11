@extends('layout.app')
@section('title','ResetPassword')

@section('content')

<div class="container-fluid bg-dark">

    <div class="row p-4">
        <div class="col-md-12 text-center">
            <h4 class="text-white">Reset Password</h4>
        </div>
    </div>
</div>




<div class="container mb-3 mt-3">

   <div class="row">

          <div class="col-lg-6 offset-lg-3"">
                <form>
                     

                  <h2 class="text-center">Forgot Password?</h2>
                  <h6 class="text-center">You can reset your password here.</h6>
                    
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">New Password</label>
                       <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Confirm New Password</label>
                       <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    
                 
                  <div class="text-center ">
                  <button type="submit" class="btn btn-primary btn-block btn-lg ">Reset Password</button>
                  </div>
                  
                  
                 
                </form>
      </div>
   </div>
</div>



@endsection