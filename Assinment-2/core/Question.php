<?php 
include 'Database.php' ;

class Question extends Database{

	public function addQuestion ($title, $description, $user_id)
	{
		$created_at = date('y-m-d H:i:s');
		$sql = "INSERT INTO questions (title, description, user_id, created_at) VALUES ('$title' , '$description' , '$user_id' , '$created_at')";
		$this->exec($sql);
		return true;
	}

	public function getAllQuestions()
	{
		$sql = "SELECT questions.id, questions.title, questions.user_id, questions.created_at, users.username from questions join users on users.id=questions.user_id";
		return $this->fetch($sql);
	}

	public function getOneQuestion($q_id)
	{
		$sql = "SELECT * FROM questions WHERE id='$q_id'";
		return $this->fetch($sql);
	}

	public function makeAnswer($q_id, $user_id, $answer)
	{
		$sql = "INSERT INTO answer (question_id, user_id, details) VALUES ('$q_id', '$user_id', '$answer') ";
		$this->exec($sql);
	}

	public function getAnswers($q_id)
	{
		$sql = "SELECT answers.*, users.username from answers join users on users.id=answers.user_id WHERE question_id= '$q_id'";
		return $this->fetch($sql);
	}
}



 ?>