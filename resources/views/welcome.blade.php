
           <!--  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
@extends('front_layout')
@section('content')



    <!-- Halls section -->
<section class="categories-section spad">
<div class="container">
    <div class="section-title">
        <h2>Our Halls</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
    </div>
    <div class="row">
        <!--Show All Halls -->
        @foreach($halls as $hall)
          <div class="col-lg-4 col-md-6">
            <div class="categorie-item">
                <div class="ci-thumb set-bg" data-setbg="{{ url($hall->hall_image) }}"></div>
                <div class="ci-text">
                    <h5>Hall Name: {{ $hall->hall_name }}</h5>
                    <p>Description: {{ $hall->hall_desc }}</p>
                    <span>Number Of Seats: {{ $hall->hall_seats_count }}</span>
                    <a  class="btn btn-success" href="{{ url('/movies_by_hall/'.$hall->hall_id) }}">View Shows</a>
                </div>
            </div>
          </div> 
        @endforeach
        <!--end Hall -->
    </div>
</div>
</section>
<!-- Halls section end -->




    <!-- movies section -->
    <section class="course-section spad">
        <div class="container">
            <div class="section-title mb-0">
                <h2>Movies</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
            </div>
        </div>
        <div class="course-warp">                                       
            <div class="row course-items-area">
                
                <!-- show all movies -->
                @foreach($movies as $movie)
                <div class="mix col-lg-3 col-md-6 col-sm-6 photo">
                    <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="{{ url($movie->movie_image)}}">    </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5>{{ $movie->movie_name }}</h5>
                                <h5>{{ $movie->hall_name }}</h5>
                                <p>{{ $movie->movie_desc }}</p>
                                <div class="students">Length: {{ $movie->movie_length }}</div>
                                <a href="{{ URL::to('/view_movie/'.$movie->movie_id) }}" class="btn btn-success">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Movies section end -->


@endsection