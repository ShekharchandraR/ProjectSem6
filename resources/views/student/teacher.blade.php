@extends('student.nav')
@section('content')

	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Our Faculty</h1>
							</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
	<div id="fh5co-staff">
		<div class="container">
			<div class="row">

				@foreach($stu as $row)

				<div class="col-md-3 text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(upload/{{ $row['Image'] }});">
							
						</div>
						<h4>{{$row['Firstname']}} {{$row['Lastname']}} </h4>
						<h3> Email <a href="#">{{$row['Email']}}</a></h3>
						<h4> Mobile <a href="#">{{$row['Mobile_no']}}</a></h4>
						
						<div class="rating">
							<span>☆ ☆ ☆  ☆  ☆</span>
							</div>
					</div>
				</div>
				
				@endforeach

			
				
			</div>
		</div>
	</div>


@endsection