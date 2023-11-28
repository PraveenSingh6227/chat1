<?php

$action = $_POST['action'];
switch ($action) {
	case 'details_sent_on_mail':
	if (isset($_POST['show_points'])) {
		include 'inc/mail_function.php';
		$data = array(
			'Name' => $_POST['Name'],
			'Email' => $_POST['Email'],
			'City' => $_POST['City'],
			'age' => $_POST['age'],
			'speak' => $_POST['speak'],
			'listen' => $_POST['listen'],
			'read' => $_POST['read'],
			'write' => $_POST['write'],
			'qualification' => $_POST['qualification'],
			'experience' => $_POST['experience'],
			'employment' => $_POST['employment'],
			'adaptability' => $_POST['adaptability'],
			'age_text' => $_POST['age_text'],
			'english_text' => $_POST['english_text'],
			'speak_text' => $_POST['speak_text'],
			'listen_text' => $_POST['listen_text'],
			'read_text' => $_POST['read_text'],
			'write_text' => $_POST['write_text'],
			'qualification_text' => $_POST['qualification_text'],
			'experience_text' => $_POST['experience_text'],
			'employment_text' => $_POST['employment_text'],
			'adaptability_text' => $_POST['adaptability_text'],
			'adaptability_text' => $_POST['adaptability_text'],
			'recaptcha' => $_POST['recaptcha'],
		);
		check_eligibility_mail_fire($data);
	}
	break;
	
	default:
		# code...
		break;
}