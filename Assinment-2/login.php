
<?php include 'header.php'; ?>

<?php include 'core/user.php' ?>

<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<h2>Login Here</h2>

			<?php 
				if(isset($_POST['submit'])){
					$user = new user;
					$checkOneUser = $user->checkOneUser($_POST['username'], $_POST['password']);

					if(count($checkOneUser) == 1){

						$getUserId = $checkOneUser[0]['id'];
						$getUsername = $checkOneUser[0]['username'];

						//session to session
						session_start();
						$_SESSION['user_id'] = $getUserId;
						$_SESSION['username'] = $getUsername;

						header("location:index.php");

					}else{
						echo "<p class = 'alert alert-warning'>Credential does not metch</p>";
					}
				
				}

			 ?>
			
	<form action="" method="POST">
		<div class="form-group">
			<label for="exampleInputUsername">username</label>
			<input type="text" class="form-control" name="username" required>
		</div>
		 	
		 	<div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" required>
		  </div>
		  
		  <button type="submit" name="submit" class="btn btn-primary">Login</button>
		  <span><a href="register.php">Register</a></span>
 </form>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>