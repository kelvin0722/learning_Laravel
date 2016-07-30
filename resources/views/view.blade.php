@extends('master')

@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Country</th>
      <th>City</th>
      <th>Date</th>
      <th>Number of aliens</th>
      <th>Color of aliens</th>
    </tr>
  </thead>
  <tbody>
    @foreach($record as $key=>$records)
     <tr>
     <td>{{$records->country}}</td>
     <td>{{$records->city}}</td>
     <td>{{$records->date}}</td>
     <td>{{$records->no_of_aliens}}</td>
     <td>{{$records->color_of_aliens}}</td>
     </tr>

     @endforeach
  </tbody>
</table>

@endsection