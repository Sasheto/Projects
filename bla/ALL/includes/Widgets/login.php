<?php

$host = "localhost";
$user = "root";
$pass = "sa6konts124";
$db = "userlogin";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SLECT * FROM users WHERE username ='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysql_query($sql);
		if (mysql_num_rows($res) == 1) {
			echo "Logged in!";
			exit();
		} else {
			echo "Invalid login information.";
			exit();
		}
}
?>

<div class="widget">
    <h2>Log in/Register</h2>
    <div class="inner">
        <form action="login.php" method="get">
			<ul id="login">
				<li>
					Username:<br>
					<input type="text" name="username" required="required" />
				</li>
				<li>
					Password:<br>
					<input type="password" name="password" required="required" />
				</li>
				<li>
					<input type="submit" value="Log in">
				</li>
				<li>
					<a href="register.php">Register</a>
				</li>
			</ul>
		</form>
    </div>
</div>











