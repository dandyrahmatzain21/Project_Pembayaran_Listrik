<!DOCTYPE html>
<!-- saved from url=(0061)https://getbootstrap.com/docs/3.3/examples/navbar-static-top/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title>Pembayaran Listrik</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    <style> 
    body{
    background-image:url(<?php echo base_url();?>bg/Background.png) ;
    }
    .jumbotron{
      background-color: orange;
    }

    </style>
  </head>

  <body>
<div>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" style="background-color: orange;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span style="background-color: white" class="sr-only"></span>
            <span style="background-color: white" class="icon-bar"></span>
            <span style="background-color: white" class="icon-bar"></span>
            <span style="background-color: white" class="icon-bar"></span>
          </button>
          <a style="color: white" class="navbar-brand" href="#"><span class="glyphicon glyphicon-flash"></span> Pembayaran Listrik Online</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a style="color: orange" href="<?php echo base_url();?>index.php/home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <?php
    if($this->session->userdata('level')=='Admin') { 
      // menu untuk kasir
    ?>

            <li><a style="color: white" href="<?php echo base_url();?>index.php/tarif/tampil"><span class="glyphicon glyphicon-usd"></span> Tarif</a></li>
            <li><a style="color: white" href="<?php echo base_url();?>index.php/pelanggan/tampil"><span class="glyphicon glyphicon-user"></span> Pelanggan</a></li>
            <li><a style="color: white" href="<?php echo base_url();?>index.php/penggunaan/tampil"><span class="glyphicon glyphicon-stats"></span> Penggunaan</a></li>
            <li><a style="color: white" href="<?php echo base_url();?>index.php/tagihan/tampil"><span class="glyphicon glyphicon-inbox"></span> Tagihan</a></li>
            <li><a style="color: white" href="<?php echo base_url();?>index.php/pembayaran/tampil"><span class="glyphicon glyphicon-credit-card"></span> Pembayaran</a></li>
            <li><a style="color: white" href="<?php echo base_url();?>index.php/laporan/tampil"><span class="glyphicon glyphicon-book"></span> Laporan</a></li>

    <?php
    }
    if($this->session->userdata('level')=='Petugas') {
    // menu untuk kasir 
    ?>  
            <li><a style="color: white" href="<?php echo base_url();?>index.php/tagihan/tampil"><span class="glyphicon glyphicon-inbox"></span> Tagihan</a></li>
            <li><a style="color: white" href="<?php echo base_url();?>index.php/pembayaran/tampil"><span class="glyphicon glyphicon-credit-card"></span> Pembayaran</a></li>

    <?php
    }
    ?>
            
            
            <li><a style="color: white" href="<?php echo base_url();?>index.php/user/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
<div class="jumbotron">
<?php 
        if(isset($page)){
          $this->load->view($page);
      }else{
        echo '<h1 style="color:white;" align="center">Pembayaran Listrik Online</h1>
        <p style="color:white" align="center">Selamat Datang '.$this->session->userdata('nama').',Anda Login Sebagai '.$this->session->userdata('level').'</p>';
      }
      ?>
      </div>
</div>
    </div> <!-- /container -->
<script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
</body></html>