@extends('home')
@section('content')


<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">All Movies In My Cinema</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Movie Name</th>
              <th>Movie Hall</th>
              <th>Movie Image</th>
              <th>Movie Description</th>
              <th>Movie Length</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($movies as $movie)
            <tr>
              <td>{{ $movie->movie_name }}</td>
              <td>{{ $movie->hall_id }}</td>
              <td><img src="{{ url($movie->movie_image)}}" style="height: 70px; width: 70px"></td>
              <td>{{ $movie->movie_desc }}</td>
              <td>{{ $movie->movie_length }}</td>
              <td>
                <a href="{{ URL::to('/movie/edit/'. $movie->movie_id) }}" class="btn btn-success btn-sm">Edit</a>
               <a href="{{ URL::to('/movie/delete/'. $movie->movie_id) }}" class="btn btn-dark btn-sm">Delete</a>
              	
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