<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<body>
<?php
 $host='localhost';
$user='vamshi';
$pass='vamshi';
$db='vamshi';
$conn=mysqli_connect($host,$user,$pass,$db);
 session_start();
 echo $_POST['username'];
 echo $_POST['password'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 $result = mysqli_query($conn,$query);
 $rows = mysqli_num_rows($result);
 echo $rows;
 if($rows==1)
 {
	// $user_id=mysqli_result($result,0,'email');
 //$_SESSION['user_id'] = $user_id;
 header("Location: roomdetail.html"); // Redirect user to index.php
 }
 else
 {
 header("Location: wrong.html");//echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.html'>Login</a></div>";
 }
?>
<!--<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div> -->

</body>
</html>


