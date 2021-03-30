@extends('layout.mainapp')
@section('title','UserProfile')


@section('content')
<div class="container-fluid bg-dark">

                <div class="row p-4">
                    <div class="col-md-12 text-center">
                        <h4 class="text-white">Tutorials</h4>
                    </div>
                </div>
 </div>
<div class="container-fluid">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Topic</th>
      <th scope="col">Title</th>
      <th scope="col">Video</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Getting Started</td>
      <td>HTML Part-1</td>
      <td>https://youtu.be/sEHBSzTgZwU</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Getting Started</td>
      <td>HTML Part-2</td>
      <td>https://youtu.be/sEHBSzTgZwU</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Getting Started</td>
      <td>HTML Part-3</td>
      <td>https://youtu.be/sEHBSzTgZwU</td>
    </tr>
    <th scope="row">4</th>
    <td>Getting Started</td>
    <td>HTML Part-4</td>
    <td>https://youtu.be/sEHBSzTgZwU</td>
    </tr>
    <tr>
    <th scope="row">5</th>
    <td>Getting Started</td>
    <td>HTML Part-5</td>
    <td>https://youtu.be/sEHBSzTgZwU</td>
    </tr>
    <tr>
    <th scope="row">6</th>
    <td>Getting Started</td>
    <td>HTML Part-6</td>
    <td>https://youtu.be/sEHBSzTgZwU</td>
    </tr>
  </tbody>
</table>




</div>


@endsection