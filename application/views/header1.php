<!DOCTYPE html>
<html>
<head>
	<title> Product Managemet</title>

 		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
 	 	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/fontawesome.css') ?>">
  		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/fontawesome.min.css') ?>">
  		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/style.css') ?>">
  		<link rel="stylesheet" href="<?= base_url('assets/dist/sweetalert.css') ?>">

  <style media="screen">
    .dataTables_filter > label{
      float: right;
    }

    .pagination{
      float: right;
      margin-top: 0px;
    }
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="customercart"> <?= $title;?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> Cart</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="login"><i class="glyphicon glyphicon-log-in"></i> Login Admin</a></li>
    </ul>
  </div>
</nav>