<?php
	require_once('PHPExcel-1.8/PHPexcel/IOFactory.php');

	class IOfactory extends PHPExcel_IOFactory{
		public function __construct(){
			parent::__construct();
		}
	}