@extends('layout.mainapp')
@section('title','UserProfile')


@section('content')
<div class="container-fluid bg-dark">

                <div class="row p-4">
                    <div class="col-md-12 text-center">
                        <h4 class="text-white">Classroom(Paid Tutorials)</h4>
                    </div>
                </div>
 </div>
 <div class="container">
<div class="row">
<div class="col-md-12 p-5">
<table id="ClassDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">NO</th>
	  <th class="th-sm">Title</th>
	  <th class="th-sm">Topic</th>
      <th class="th-sm">Video</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $ClassData as  $ClassData)
     <tr>
      <td>{{ $ClassData->id}}</td>
      <td>{{ $ClassData->classtopic}}</td>
      <td>{{ $ClassData->classtitle}}</td>
      <td>{{ $ClassData->classvideo}}</td>
     
     </tr>


    @endforeach
  </tbody>
</table>

</div>
</div>
</div>


@endsection