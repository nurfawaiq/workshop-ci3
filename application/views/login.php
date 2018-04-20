<title>Login</title>
<h3>Form Login</h3>

<form action="<?php echo site_url('auth/proses_login'); ?>" method="post">
	Username : 
	<input type="text" name="username" required autofocus>
	<br>
	Password : 
	<input type="password" name="password" required>
	<br>
	<input type="submit" name="login" value="Login">
</form>