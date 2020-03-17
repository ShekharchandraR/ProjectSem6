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
			   					<h1 class="heading-section">Update your profile here</h1>
							</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>


	                            
@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $errors )
		<li>{{$errors}}</li>            
	@endforeach
	</ul>
</div>
@endif

@if(\Session::has('success'))
<div class="alert alert-danger">
	<p>{{\Session::get('success')}}</p>
</div>
@endif


	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
		
				<div class="col-md-6 animate-box">
					<h3> Profile details </h3>
					<form action="{{action('studentController@update',$re)}}"  method="POST" >

						 {{ csrf_field() }} 

						 @foreach($stu as $row)
   						<input type="hidden" name="_method" value="PATCH" />
                                      
						<div class="row form-group">
							
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
							<input  name="First_name" type="text" id="t1" class="form-control" placeholder="Enter Firstname" value="{{ $row['First_name'] }}"  readonly>
							</div>

							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input  name="Last_name" type="text" id="t2" class="form-control" placeholder="Enter Lastname"  value="{{ $row['Last_name'] }}" readonly>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input name="Address" type="text" id="t3" class="form-control" placeholder="Enter Address"  value="{{ $row['Address'] }}" readonly>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input name="Email" type="text" id="t4" class="form-control" placeholder="Enter email"  value="{{ $row['Email'] }}" readonly>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input name="Password" type="password" id="t5" class="form-control" placeholder="Enter password"  value="{{ $row['Password'] }}" readonly>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input  name="Mobile_No" type="text" id="t6" class="form-control" placeholder="Mobile no"  value="{{ $row['Mobile_No'] }}" readonly>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input  name="Dob" type="date" id="t7" class="form-control" placeholder="Date of birth"  value="{{ $row['Dob'] }}" readonly>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="file" id="an" class="form-control" placeholder="image">
							</div>
						</div>

						<div class="form-group">
							<Button type="button"  onclick = "GFG_Run()"  class="btn btn-primary">Edit</Button>
							<input type="submit" value="Update profile" class="btn btn-primary">
						</div>
					

						@endforeach

					</form>		
				</div>
			</div>
			
		</div>
	</div>


	<script> 
		function GFG_Run() { 
			document.getElementById('t1').readOnly = false; 
			document.getElementById('t2').readOnly = false; 
			document.getElementById('t3').readOnly = false; 
			document.getElementById('t4').readOnly = false;
			document.getElementById('t5').readOnly = false; 
			document.getElementById('t6').readOnly = false; 
			document.getElementById('t7').readOnly = false;  
		} 
	</script> 


	@endsection