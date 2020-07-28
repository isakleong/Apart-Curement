<?php
if (isset($_POST["user"]) && isset($_POST["pass"])){
    header("Location: login.html");

}
elseif (empty($user) || empty($pass)) {
    header("Location: login.html");
}
else{
    $user = $_POST["user"];
    $pass = md5($_POST["pass"]);    
}

	$conn = new mysqli("localhost", "test","root", "");
if($rowCheck > 0){
    while($row = mysql_fetch_array(result))
    {
        session_start();
        session_register('user');

        echo "Login success";
        header("Location: loginok.php");
    }
}
else{
    echo "Invalid username or password";
}
?>
