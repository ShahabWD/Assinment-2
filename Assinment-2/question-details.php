
<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<?php include 'core/Question.php'; ?>


<?php 
	if(isset($_GET['q_id'])){
		$question = new Question;
		$getQuestion = $question->getOneQuestion($_GET['q_id']);
		if(count($getQuestion) == 1){

			$getQuestion = $getQuestion[0];

		}else{
			echo "something wrong";
		exit();
		}

	}else{
		echo "Invalid Request";
		exit();
	}


 ?>

<div class="container">
	<div class="row">
		<div class="col-8 offset-2 card">

			<h5>Question Details</h5>
			<h3> <?= $getQuestion['title'] ?> </h3>

			<div class="border border-primary">
				<?= $getQuestion['description'] ?>
			</div>

		</div>
			
	</div>


	<div class="row">
		<div class="col-8 offset-2 card">
			<h5 class="mt-4">Comment section:</h5>
			<hr>

			<?php 
				$getAnswers = $question->getAnswers($getQuestion['id']);
			 ?>

			 <<?php foreach($getAnswers as $answers): ?>

			<div class="border border-primary p-5 mb-3">
				<div>
					<?= $answer['details'] ?>
				</div>
				<small>Answer By: <?= $answer['username'] ?> </small>
			</div>

			<?php if(isset($_SESSION['username'])) : ?>

				<?php 
					if(isset($_POST['submit'])){
						$question->makeAnswer($getQuestion['id'], $_SESSION['user_id'], $_POST['details']);

						echo "Comment Submited";
					}
				 ?>
			<form class="form-group" action="" method="POST">
				<textarea id="textarea" class="form-control" name="description"></textarea>
				<input type="submit" name="submit" value="comment" class="btn btn-sm btn-success">
			</form>
		<?php endif; ?>
		</div>
	</div>

</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script type="text/javascript">
	tinymce.init({
	  selector: 'textarea'
	});
</script>

<!-- <?php include 'footer.php';  ?>