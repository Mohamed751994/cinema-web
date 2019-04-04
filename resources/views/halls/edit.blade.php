@extends('home')
@section('content')


  <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit a Hall</h4>
     
      <form class="forms-sample" action="{{ url('/update' , $hall->hall_id) }}" method="POST" enctype="multipart/form-data">
      	{{ csrf_field() }}
        <div class="form-group">
          <label>Hall Name</label>
          <input type="text" class="form-control" name="hall_name" value="{{ $hall->hall_name }}">
        </div>
        <div class="form-group">
          <label>Hall Description</label>
          <textarea class="form-control" name="hall_desc" rows="3" value="{{ $hall->hall_desc }}"></textarea>
        </div>
        <div class="form-group">
            <label>Hall Image</label>
            <input type="file" class="form-control-file" name="hall_image" value="{{ $hall->hall_image }}">
          </div>
        <div class="form-group">
          <label>Number of Seats</label>
          <input type="text" class="form-control" name="hall_seats_count"  value="{{ $hall->hall_seats_count }}">
        </div>
        
        <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
      </form>
    </div>
  </div>
</div>



@endsection