<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['userId'])) { //로그인이 된 상태라면
        session_unset();
        session_destroy();
    }

    header("Location: ./index.html");
?>