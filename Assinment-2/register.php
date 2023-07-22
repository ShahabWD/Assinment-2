

<?php include 'header.php'; ?>

<?php include 'core/user.php' ?>

<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<h2>Register Here</h2>

			<?php 
				if(isset($_POST['submit'])){
					$user = new user;
					$userCount = $user->checkPreviousUser($_POST['username'], $_POST['email']);
					if(count($userCount) > 0){
						echo "<p class = 'alert alert-warning'>Username/Email exists</p>";
					}else{
						$user->register($_POST['username'], $_POST['email'], md5($_POST['password']));
					echo "<p class = 'alert alert-success'>Register successful</p>";
					}
				}

			 ?>
			
	<form action="" method="POST">
		<div class="form-group">
			<label for="exampleInputUsername">username</label>
			<input type="text" class="form-control" name="username" required>
		</div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" required>
		  </div>
		  
		  <button type="submit" name="submit" class="btn btn-primary">Register</button>
		  <span><a href="login.php">Login</a></span>
 </form>
		</div>
	</div>
</div>



<?php include 'footer.php' ?>