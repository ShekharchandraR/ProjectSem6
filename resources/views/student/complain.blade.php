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
			   					<h1 class="heading-section">Complain</h1>
							</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	@if(\Session::has('success'))
	<div class="alert alert-danger">
		<p>{{\Session::get('success')}}</p>
	</div>
	@endif

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
			
				<div class="col-md-10 animate-box">
					<h3>Complain Box</h3>
					<form action="{{url('complain')}}" method="POST">
						{{ csrf_field() }}
						
						<div class="row form-group">
				

							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<select name="tutorID" class="form-control">
									@foreach($fetchTeacher as $row)
									<option  class="form-control" value="{{ $row['id'] }}">  {{ $row['Firstname'] }}  {{ $row['Lastname'] }} </option>								
									@endforeach
								</select>
							</div>
						
						</div>

						<input type="hidden" name="SendBy" value="Student"/>

						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" name="Sub" placeholder="Subject">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" name="Msg" placeholder="Message">
							</div>
						</div>

					
						<div class="form-group">
							<input type="submit" value="Send Complain" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

@endsection