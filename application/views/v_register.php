<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Data Penghuni</title>
    <meta charset="utf-8">
</head>
<body>

    <?php if (isset($error)) {
      echo $error;
    } ?>
    <?php echo form_open_multipart('c_akun/createAkun'); ?>
 
  <h3>Data Member</h3>
  <table border="1">
    <tr>
      <td>Username</td>
      <td> : </td>
      <td>
        <input type="text" name="username"><br>
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td> : </td>
      <td>
        <input type="password" name="password"><br>
      </td>
    </tr>
    <tr>
      <td>Nama Lengkap</td>
      <td> : </td>
      <td>
        <input type="text" name="namalengkap"><br>
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td> : </td>
      <td>
        <input type="text" name="alamat"><br>

      </td>
    </tr>

    <tr>
      <td>
        <input type="submit" name="submit" value="Kirim">
      </td>
    </tr>
     <tr>
      <td>
          <a href="<?php echo base_url()?>index.php/c_akun">Kembali</a>
      </td>
    </tr>

  </table>
</body>
</html>