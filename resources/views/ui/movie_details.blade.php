@extends('front_layout')
@section('content')

<!-- single film section -->
    <section class="single-course spad pb-0">
        <div class="container">
            <div class="course-meta-area">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="course-note"><img src="{{ url($movie_details->movie_image) }}"></div>
                        <h3>{{ $movie_details->movie_name }}</h3>
                        <div class="course-metas">
                            <div class="course-meta">
                                <div class="course-author">
                                 
                                    <h6>Description</h6>
                                    <p>{{ $movie_details->movie_desc }}</p>
                                </div>
                            </div>
                            <div class="course-meta">
                                <div class="cm-info">
                                    <h6>Hall</h6>
                                    <p>{{ $movie_details->hall_name }}</p>
                                </div>
                            </div>
                            <div class="course-meta">
                                <div class="cm-info">
                                    <h6>Duration</h6>
                                    <p>{{ $movie_details->movie_length }}</p>
                                </div>
                            </div>
                            <div class="course-meta">
                                <div class="cm-info">
                                    <h6>Reviews</h6>
                                    <p>2 Reviews <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star is-fade"></i>
                                    </span></p>
                                </div>
                            </div>
                        </div>
                        <a href="" class="site-btn price-btn">Price: $90</a>
                        <a href="{{ url('/view_movie/'.$movie_details->movie_id.'/booking') }}" class="site-btn buy-btn">Book Your Seat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection