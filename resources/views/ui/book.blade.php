@extends('front_layout')
@section('content')


<!-- Booking Info -->
<section class="contact-page spad pb-0">
  <div class="container">
	<div class="row">
	 <div class="col-lg-12">
		<div class="contact-form-warp">
			<div class="section-title text-white text-left">
				<h2>Please Fill This Form To Get a Ticket....</h2>
			</div>
			<form class="contact-form" method="POST" action="{{ route('booking.store') }}">
				{{ csrf_field() }}
				<input type="text" placeholder="Your Name" name="booking_name">
				<input type="text" placeholder="Your E-mail" name="booking_email">
				<input type="date"  name="booking_date" class="form-control" path="displayFrom" id="displayFrom"
                        placeholder="display From"/>
				<br>
				<br>
				<select class="form-control" name="booking_party">
                 <option>10 AM Party</option>
                 <option>2 PM Party</option>
                 <option>6 PM Party</option>
                 <option>9 PM Party</option>
                 <option>12 AM Party</option>
                </select>
                <br>
                <input type="text" placeholder="Choose Your Seat" name="booking_seat">
                <br>
                <select class="form-control" name="booking_payment">
                 <option>Visa Card</option>
                 <option>PayPal</option>
                 <option>Credit Card</option>
                </select>
                <br>
				<button class="site-btn">Booking Now !</button>
			</form>
		</div>
	  </div>
    </div>
  </div>
</section>


@endsection