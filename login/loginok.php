<?php
session_start();
if(session_is_registered('user')){
	echo "Welcome";
}
else{
	header("Location: login.html");
}
?>