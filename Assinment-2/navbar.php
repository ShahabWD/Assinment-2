
<?php 

  //session_start();
 if(!isset($_SESSION['username'])){
    session_start();
 }

 ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Main stack flow</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <div class="form-inline my-2 my-lg-0 navbar-nav">
        

         <?php if(isset($_SESSION['username'])): ?>
           <a class="nav-link" href="add-question.php">Add Question</a>
           <a href="logout.php"><?= $_SESSION['username']. "(logout)" ?></a>
          <?php else: ?>
            <a class="nav-link" href="login.php">login</a>
            <a class="nav-link" href="register.php">Register</a>
         <?php endif; ?>

    </div>
      
    </div>>
  </div>
</nav>