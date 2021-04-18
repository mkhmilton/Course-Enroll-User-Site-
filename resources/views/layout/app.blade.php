<html>
  <head>
      <title>@yield('title')</title>
       <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
       <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        
        <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/datatables-select.min.css')}}" rel="stylesheet">

       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
     @include('layout.menu') 


     @yield('content')


     @include('layout.footer') 
    <script src="{{asset('js/jquery.min.js')}}"></script> 
   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
   <script  src="{{asset('js/datatables.min.js')}}"></script>
   <script src="{{asset('js/datatables-select.min.js')}}"></script>
   <script  src="{{asset('js/jquery.slimscroll.js')}}"></script>
    

   
    
  </body>
</html>