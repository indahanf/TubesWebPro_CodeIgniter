<!DOCTYPE html>
<html lang="en" dir="ltr">
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
  <title>Daftar Member</title>
    <meta charset="utf-8">
</head>
<body>

    <?php if (isset($error)) {
      echo $error;
    } ?>
    <?php echo form_open_multipart('c_akun/createAkun'); ?>
 
 <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <!-- Form register -->
                            <form>
                                <h2 class="text-center font-up font-bold deep-orange-text py-4">Sign up</h2>
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input name="nama" type="text" id="orangeForm-name3" class="form-control" required/>
                                    <label for="orangeForm-name3">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input name="username" type="text" id="orangeForm-name3" class="form-control" required/>
                                    <label for="orangeForm-name3">Your Username</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input name="email" type="email" id="orangeForm-email3" class="form-control" required/>
                                    <label for="orangeForm-email3">Your Email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input name="password" type="password" id="orangeForm-pass3" class="form-control" required/>
                                    <label for="orangeForm-pass3">Your Password</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input name="alamat" type="text" id="orangeForm-name3" class="form-control">
                                    <label for="orangeForm-name3" required/>Your Address</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-deep-orange" name="submit" value="submit" >Sign Up<i class="fa fa-angle-double-right pl-2" aria-hidden="true"></i></button>
                                </div>
                            </form>
                            <!-- Form register -->
                        </div>
                    </div>
                </div>
  
</body>
</html>