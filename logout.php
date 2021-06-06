<?php

session_start();
if(isset($_SESSION['login_user']))
{
unset($_SESSION['login_user']);
}
header("location:index.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>