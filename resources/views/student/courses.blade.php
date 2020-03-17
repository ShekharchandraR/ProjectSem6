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
			   					<h1 class="heading-section">Our Course</h1>
						</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Course</h2>
					<p> The Available List of cource on out Site.</p>
				</div>
			</div>
			<div class="row">

				
				@foreach($fetchData as $row)

				<div class="col-md-6 animate-box">
					<div class="course">
						
						<div class="desc">
							<h3> Cource Name <a href="#"> {{$row['C_Name']}}  </a></h3>
							<p> Cource Description :-  {{$row['C_Desc']}}  </p>
							<p> Subjects :-  {{$row['subject_Name	']}}  </p>

							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>

				@endforeach


			
			</div>
		</div>
	</div>


	@endsection