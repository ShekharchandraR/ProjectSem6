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
			   					<h1 class="heading-section">Package details</h1>
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
					<h3>Enter details of package</h3>
					<form action="#">
						

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="pn" class="form-control" placeholder="Package name">
							</div>
						</div>

                        <div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="sn" class="form-control" placeholder="Subject name">
							</div>
						</div>

                        <div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="tn" class="form-control" placeholder="Tutor name">
							</div>
						</div>



						
						<div class="form-group">
							<input type="submit" value="Submit details" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>


@endsection