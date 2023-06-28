
<?php
	include('FrontEnd_Header.php');
	 include('dbconnect.php');
?>

<?php
	include('FrontEnd_Nav.php');
?>
	<!-- Content -->
	<div class="container my-5">

		<div class="row justify-content-center">
			<div class="col-5">
				<?php 

					if(isset($_SESSION['reg_success'])):
       
				 ?>

				 <div class="alert alert-success alert-dismissible fade show" role="alert">   
  				       <h2>Congratulatins </h2><h5><p>you have successfully 😇 
  				       	<span class="">Sign Up</span> </p></h5><p> <? $_SESSION['reg_success']; ?></p>

  				       You should check in on some of those fields below.
 			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   			           <span aria-hidden="true">&times;</span>
 					   </button>
					</div>
					


				<?php endif; 
				      unset($_SESSION['reg_success']);
				          ?>

				          <?php if(isset($_SESSION['reg_fail'])): ?>

						 <div class="alert alert-danger alert-dismissible fade show" role="alert">   
  				       <h2>Fail Login </h2><h5><p>you have fail  
  				       	<span class="">Login</span> </p></h5><p> <? $_SESSION['reg_fail']; ?></p>

  				       You should check in on some of those fields below.
 			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   			           <span aria-hidden="true">&times;</span>
 					   </button>
					</div>

				<?php endif; 
				unset($_SESSION['reg_fail']);?>


				<form action="signin.php" method="POST">
					
		      		<div class="form-group">
		      			<label class="small mb-1" for="inputEmailAddress">Email</label>
		      			<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" required>
		      		</div>
		      		
		      		<div class="form-group">
		      			<label class="small mb-1" for="inputPassword">Password</label>
		      			<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" required>
		      		</div>
		      
		      		<div class="form-group">
		          		<div class="custom-control custom-checkbox">
		          			<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
		          			<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>


		          		</div>

		          		<a class="small" href="#">Forgot Password?</a>

		      		</div>
		      		
		      		<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
		        		
		        		<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
		      		</div>


		  		</form>

		  		<div class=" mt-3 text-center ">
		  			<a href="register.php" class="loginLink text-decoration-none">Need an account? Sign Up!</a>
		  		</div>
			</div>
		</div>
		
	</div>
<?php 	include ('FrontEnd_Footer.php') ?>