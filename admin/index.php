<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ZeusPanel - WHM</title>
<style type="text/css">
body {
	background-image: url(img/LoginBG.png);
}
#login {
	background-image: url(img/LoginBox.png);
	background-repeat: no-repeat;
	height: 175px;
	width: 393px;
	padding-top: 30px;
	padding-left: 10px;
	margin-right: auto;
	margin-left: auto;
	color: #FFF;
	font-family: Arial;
}
</style></head>

<body>

<div id="login">
<center>
<?php
session_start();

// Check if he wants to login:
if (!empty($_POST[username]))
{
	require_once("../global/includes/db_config.php");

    $username = mysql_escape_string($_POST[username]);
    $password = substr(sha1(mysql_escape_string($_POST[password])),0,33);
	// Check if he has the right info.
	$query = mysql_query("SELECT username, usertype FROM users
							WHERE username = '$username'
							AND password = '$password'")
	or die ("Error - Couldn't login user.");
	
	$row = mysql_fetch_assoc($query);
	$username = $row["username"];
	$usertype = $row["usertype"];
	
	if (!empty($username)) // he got it.
	{
		//Now we have to check what rank the person is.
		// 1 = User
		// 2 = Reseller
		// 3 = Administrator
		if(intval($rank) > 2){
		$_SESSION['adminusername'] = $username;
		$_SESSION[usertype] = $usertype;
		header('Location: main.php');
		exit();
		} else {
			echo "Your account is not authorized to access WHM.";	
		}
	}
	else // bad info.
	{
		echo "Error - Couldn't login user.<br /><br />
			Please try again.";
		exit();
	}
}
?>
  <form id="form1" name="form1" method="post" action="">
    <p>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" />
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" />
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Login" />
    </p>
  </form>
  </center>
</div>
</body>
</html>