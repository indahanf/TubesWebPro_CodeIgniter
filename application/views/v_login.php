<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
   	<link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/myaccount.css"> 
</head>
<body class="hm-gradient">
<?php if (isset($error)) {
	echo $error;
} ?>

<form method="post" action="<?php echo base_url()?>index.php/c_akun/index">
<div class="row">
<div class="col">
    <div class="card">
		<div class="card-body">
            <h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Login:</h3>
              <!--Body-->
                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                        <input name="username" type="text"  id="defaultForm-email" class="form-control">
                            <label for="defaultForm-email">Your email</label>
                         </div>
                        <div class="md-form">
                             <i class="fa fa-lock prefix grey-text"></i>
                             <input  name="password" type="password" id="defaultForm-pass" class="form-control">
                             <label for="defaultForm-pass">Your password</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-default waves-effect waves-light" name="submit">Login</button>
                        </div>
                </div>
        </div>
</div>
</div>
<a href="<?php echo base_url()?>index.php/c_akun/createAkun">Registrasi</a>
</form>
</body>
</html>