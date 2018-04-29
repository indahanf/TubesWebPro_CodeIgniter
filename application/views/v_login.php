<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login </title>
</head>
<body>
<h3>LOGIN</h3>
<?php if (isset($error)) {
	echo $error;
} ?>
<form method="post" action="<?php echo base_url()?>index.php/c_akun/index">
	<table>
		<tr>
			<td>USERNAME</td>
			<td> : </td>
			<td>
				<input type="text" name="username" placeholder="masukan username anda">
			</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td> : </td>
			<td>
				<input type="password" name="password" placeholder="masukan password anda">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Login">
			</td>
		</tr>
		<tr>
			<td>
				<a href="<?php echo base_url()?>index.php/c_akun/createAkun">Registrasi</a>
			</td>
		</tr>
	</table>
</form>
</body>
</html>