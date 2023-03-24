<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome!!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <p>
        <h2>Congratulation! You have logged into a password protected page. <a href="logout.php">Click here</a> to Logout</h2>
    </p>
</body>
</html>

