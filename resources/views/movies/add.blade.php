@extends('home')
@section('content')


  <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add New Movie</h4>

      <!-- Show Validate Error  -->
                    @if ($errors)
                    <ul>
                     @foreach($errors->all() as $error)
                     <li>
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                     </li> 
                        @endforeach
                    </ul>
                    @endif
                    <!-- end Errors -->
     
      <form class="forms-sample" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
      	{{ csrf_field() }}
        <div class="form-group">
          <label>Movie Name</label>
          <input type="text" class="form-control" name="movie_name" placeholder="Name of Movie">
        </div>

        <div class="form-group">
          <label for="hall">Select Hall</label>
          <select class="form-control" name="hall_id" id="hall">
           @foreach($halls as $hall)
            <option value="{{ $hall->hall_id }}" >{{ $hall->hall_name }}</option>
           @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Movie Description</label>
          <textarea class="form-control" name="movie_desc" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Movie Image</label>
            <input type="file" class="form-control-file" name="movie_image">
          </div>
        <div class="form-group">
          <label>Length of Movie</label>
          <input type="text" class="form-control" name="movie_length">
        </div>
        
        <button type="submit" class="btn btn-primary mr-2">Create</button>
      </form>
    </div>
  </div>
</div>



@endsection