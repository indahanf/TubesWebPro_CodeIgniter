<!DOCTYPE html>
<html>
<head>
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
    <!--===============================================================================================-->
      <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/carousel.css"> 
	<title>Login</title>
</head>
<body>

 <?php
if ($this->session->flashdata('alert')=='sukses_insert'){
    echo "<script>alert('Sukses Insert Data');</script>";
}else if ($this->session->flashdata('alert')=='sukses_edit'){
    echo "<script>alert('Sukses Edit Data');</script>";
}else if ($this->session->flashdata('alert')=='sukses_hapus'){
    echo "<script>alert('Sukses Hapus Data');</script>";
}

?> 
  <!-- horizontal line -->


<header style="background-color: #ffd1d1 ">
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/img/title/titlekategori.png" alt="">
</header>
  <div align="center" class="row">
    <div class="col" style="width: 100%;"><hr></div>
  </div>
<section class="section-white">
<div class="container">    
     <!-- carousel slide -->
     <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
         <img  class="img-fluid" src="<?php echo base_url(); ?>assets/img/img-product/img-baju/2.jpg" alt="baju">
         <div class="carousel-caption">
            <a style="text-decoration: none;" href="<?php echo base_url()?>index.php/c_product/fashion"><h2>Fashion</h2></a>
         </div>
       </div>
       
       <div class="carousel-item">
         <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/img-product/img-shoes/2.jpg" alt="sepatu">
          <div class="carousel-caption">
            <a style="text-decoration: none;" href="<?php echo base_url()?>index.php/c_product/shoes"><h2>Shoes</h2></a>
          </div>
       </div>
       <div class="carousel-item">
         <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/img-product/img-carseat/1.jpg" alt="Carseat">
          <div class="carousel-caption">
            <a style="text-decoration: none;" href="<?php echo base_url()?>index.php/c_product/carseat"><h2>Carseat</h2></a>
          </div>
       </div>
     </div>
     
     <!-- Left and right controls -->
     <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>	
</div>
</section>

 
</body>
</html>