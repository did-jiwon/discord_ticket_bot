<?php
	require_once 'db.class.php';

	// 회원가입
	if(isset($_POST['id']) && isset($_POST['password']) && isset($_POST['name'])) { // id, password, name이 db(?)에 있으면 실행
		$id = $_POST['id'];
		$password = $_POST['password'];
		$name = $_POST['name'];

		$result = DB::query('SELECT * FROM topic WHERE id="' . $id . '"');
		if($result && count($result) > 0) { // result가 true거나 result객체가 1개 이상인 경우 => 이미 등록된 아이디
			header('Location: ./member-join.php?msg=중복된 아이디');
		} else {
			DB::query('INSERT INTO topic VALUES (:id, :password, :name)', array( // :id가 뭐야;;;
				':id'		=> $id,
				':password'	=> password_hash($password, PASSWORD_DEFAULT),
				':name'		=> $name
			));
			
			header('Location: ./login.php?msg=회원가입 성공');
		}
	} else {
		header('Location: ./member-join.php');
	}
?>