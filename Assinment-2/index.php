<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<?php include 'core/Question.php' ?>

<?php 
	$question = new Question;
	$allQuestions = $question->getAllQuestions();


	// echo "<pre>";
	// print_r($allQuestions->getAllQuestions());
	// echo "</pre>";

 ?>


<div class="container">
	<div class="row">

		<?php foreach ($allQuestions as $question): ?>
		<div class="col-8 offset-2 card mb-3">

			<?php 
					$link = "question-details.php?q_id=".$question['id'];
			 ?>

				<h3> <a href="<?= $link ?>"> <?= $question['title'] ?> </a> </h3>
				<small>Created: <?= date('d M, Y' , strtotime($question['created_at'])) ?>  || 
					question by: <?= $question['username'] ?>  </small>
		</div>
		 	<?php endforeach; ?>
	</div>
</div>

<?php include 'footer.php' ?>