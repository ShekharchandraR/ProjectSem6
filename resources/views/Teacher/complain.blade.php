@extends('Teacher.nav')
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
			   					<h1 class="heading-section">Write complain here</h1>
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
		
				<div class="col-md-6 animate-box">
					<h3>Complain</h3>
					<form action="{{ url('complain') }}" method="POST">
						

						<div class="row form-group">
							<select name="tutorID" class="form-control">
								@foreach($fetchTeacher as $row)
								<option  class="form-control" value="{{ $row['id'] }}">  {{ $row['First_name'] }}  {{ $row['Last_name'] }} </option>								
								@endforeach
							</select>
						</div>

                        <div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="offp" class="form-control" placeholder="Subject">
							</div>
						</div>

                        <div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="offp" class="form-control" placeholder="Message">
							</div>
						</div>



						<div class="form-group">
							<input type="submit" value="Add complain" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>


@endsection