<!DOCTYPE html>
<html>
<head>
	<title> Product Managemet</title>

 		  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
 	 	  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/fontawesome.css') ?>">
  		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/fontawesome.min.css') ?>">
  		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/style.css') ?>">
  		<link rel="stylesheet" href="<?= base_url('assets/dist/sweetalert.css') ?>">
      <link rel="stylesheet" href="<?= base_url('assets/datatables/dataTables.bootstrap.min.css') ?>">
      <link rel="stylesheet" href="<?= base_url('assets/datatables/extensions/Responsive/css/dataTables.responsive.css') ?>">
      
      


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
      <a class="navbar-brand" href="<?=base_url('product')?>"><i class="glyphicon glyphicon-home"></i> OrangeShop</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?=base_url('cartview/admincart')?>"><i class="glyphicon glyphicon-shopping-cart"></i> Cart</a></li>
      <li><a href="<?=base_url('reports')?>"><i class="glyphicon glyphicon-book"></i> Sales Report</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href=""><?php echo '<strong> <i class="glyphicon glyphicon-user"></i> '.$this->session->userdata('username').'</strong>';?></a>
      </li>
      <li><a href="<?php echo base_url('product/logout')?>"><i class="glyphicon glyphicon-log-out"></i> logout</a></li>
    </ul>
  </div>
</nav>