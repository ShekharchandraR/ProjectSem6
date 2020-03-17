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
			   					<h1 class="heading-section">Create package</h1>
							</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
		
				<div class="col-md-6 animate-box">
					<h3> Package  </h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="pname" class="form-control" placeholder="Package Name is">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="pdesc" class="form-control" placeholder="Package description">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="offername" class="form-control" placeholder="Offer percentage">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Package duration">
							</div>
						</div>


						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="package charges">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="cn" class="form-control" placeholder="Select Course">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="cn" class="form-control" placeholder="Select Tuition">
							</div>
						</div>

						
					
						<div class="form-group">
							<input type="submit" value="submit" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

@endsection