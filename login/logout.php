<?php
session_start();

if(session_is_registered('user')){
	session_unset();
	session_destroy();
}
else{
	header("Location: login.html");
}
?>