@extends('home')
@section('content')


  <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add New Hall</h4>

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
     
      <form class="forms-sample" action="{{ route('hall.store') }}" method="POST" enctype="multipart/form-data">
      	{{ csrf_field() }}
        <div class="form-group">
          <label>Hall Name</label>
          <input type="text" class="form-control" name="hall_name" placeholder="Name of Hall">
        </div>
        <div class="form-group">
          <label>Hall Description</label>
          <textarea class="form-control" name="hall_desc" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Hall Image</label>
            <input type="file" class="form-control-file" name="hall_image">
          </div>
        <div class="form-group">
          <label>Number of Seats</label>
          <input type="text" class="form-control" name="hall_seats_count">
        </div>
        
        <button type="submit" class="btn btn-primary mr-2">Create</button>
      </form>
    </div>
  </div>
</div>



@endsection