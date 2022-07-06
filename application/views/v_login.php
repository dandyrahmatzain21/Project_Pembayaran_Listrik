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

    .content{
    	padding-top:50px;
    	padding-bottom: 50px;
    	margin-top: 150px;
    	background: #eee;
    	border-radius: 10px;
    	border: 0px groove #eee;
      background-color: orange;
      margin-left: 400px;
      margin-right: 400px;
    }
    </style>
  </head>

  <body>
<div>
<div class="container">
    <div class="content">
    <div style="margin-left: 50px; margin-right: 50px;">

<h1 align="center" style="color: white">Login</h1><br/>

<form class="form-group" method="POST" action="<?php echo site_url('user/login');?>">

<div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
  <input type="text" class="form-control" name="user" placeholder="Username" aria-describedby="basic-addon1" autofocus>
</div><p></p>

<div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span>
  <input type="password" class="form-control" name="pass" placeholder="Password" aria-describedby="basic-addon1" autofocus>
</div><p></p>

<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>

</form>

<?php
echo $this->session->flashdata('pesan_login');
?>
    	
    </div>
    </div>
</div>
    </div> <!-- /container -->
    <script src="<?php echo base_url();?>bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
</body></html>
