@extends('home')
@section('content')


<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">All Halls In My Cinema</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Hall Name</th>
              <th>Hall Image</th>
              <th>Hall Description</th>
              <th>Number of Seats</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($halls as $hall)
            <tr>
              <td>{{ $hall->hall_name }}</td>
              <td><img src="{{ $hall->hall_image }}" style="height: 70px; width: 70px"></td>
              <td>{{ $hall->hall_desc }}</td>
              <td>{{ $hall->hall_seats_count }}</td>
              <td>
              	<a href="{{ URL::to('/edit/'. $hall->hall_id) }}" class="btn btn-info btn-sm">Edit</a>
              	<a href="{{ URL::to('/delete/'. $hall->hall_id) }}" class="btn btn-dark btn-sm">Delete</a>
              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



@endsection