<?php
 include 'core/init.php';
 include 'includes/overall/header.php';
 ?>
 
<h1><center>Register</center></h1>
<h2><center>Please fill all lines with *</center></h2>

    <div class="inner">
        <form action="register.php" method="get">
			<ul id="register">
				<li>
					*Userrname:<br>
					<input type="text" name="username" required="required" />
				</li>
				<li>
					*Password:<br>
					<input type="password" name="password" required="required" />
				</li>
				<li>
					*Email:<br>
					<input type="text" name="mail" required="required" />
				</li>
				<li>
					<input type="submit" value="Register" />
				</li>
			</ul>
		</form>
    </div>
</div>

<?php include 'includes/overall/footer.php';?>