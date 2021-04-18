@extends('layout.app')
@section('title','DemoClass')
@section('content')

<div class="container-fluid bg-dark">

    <div class="row p-4">
        <div class="col-md-12 text-center">
            <h4 class="text-white">DemoClass</h4>
        </div>
    </div>
</div>
                    
  
<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<table id="DemoClassDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">NO</th>
	  <th class="th-sm">Title</th>
	  <th class="th-sm">Topic</th>
      <th class="th-sm">Video</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $DemoClassData as  $DemoClassData)
     <tr>
      <td>{{ $DemoClassData->id}}</td>
      <td>{{ $DemoClassData->topic}}</td>
      <td>{{ $DemoClassData->title}}</td>
      <td>{{ $DemoClassData->video}}</td>
     
     </tr>


    @endforeach
  </tbody>
</table>

</div>
</div>
</div>


@endsection