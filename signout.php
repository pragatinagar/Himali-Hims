<?php session_start();
	
	unset($_SESSION['id']);
	unset($_SESSION['project_code']);	  
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
		/*session_unset();
		session_destroy();
		unset($_SESSION['id']);
		unset($_SESSION['project_code']);*/
		header("location:index.php");
?>
