@extends('front_layout')
@section('content')


<!-- course section -->
	<section class="course-section spad pb-0">
		<div class="course-warp">                                      
			<div class="row course-items-area">
				 <!-- show all movies -->
                @foreach($movie_halls as $movie_hall)
                <div class="mix col-lg-3 col-md-6 col-sm-6 photo">
                    <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="{{ url($movie_hall->movie_image)}}">    </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5>{{ $movie_hall->movie_name }}</h5>
                                <h5>{{ $movie_hall->hall_name }}</h5>
                                <p>{{ $movie_hall->movie_desc }}</p>
                                <div class="students">Length: {{ $movie_hall->movie_length }}</div>
                                <a href="{{ url('/view_movie/'.$movie_hall->movie_id.'/booking') }}" class="site-btn buy-btn">Book Your Seat</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

   		 </div>
		</div>
	</section>

@endsection