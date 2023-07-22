<?php include 'header.php'; ?>

<?php include 'loginCheck.php'; ?>

<?php include 'navbar.php'; ?>

<?php include 'core/Question.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-8 offset-2 card">

			<?php 
				if(isset($_POST['submit'])){
					$question = new Question;
					$question->addQuestion($_POST['title'], $_POST['description'], $_SESSION['user_id']);
				}
				


			 ?>


			<form class="" action="" method="POST">
			<div class="form-group">
				<label>Question Title</label>
				<input class="form-control" type="text" name="title" placeholder="Question Name">
			</div>

			<div class="form-group">
				<label>Question Details</label>
				<textarea id="textarea" class="form-control" name="description"></textarea>
			</div>	

			<input type="submit" class="btn btn-success btn-block" name="submit" value="Add Question">		
							
				
			</form>
		</div>
	</div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script type="text/javascript">
	tinymce.init({
	  selector: 'textarea'
	});
</script>

<?php include 'footer.php' ?>