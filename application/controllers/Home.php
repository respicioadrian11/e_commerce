<?php
	class Home extends CI_Controller{
		public function index(){
			$this->load->view('header1');
			$this->load->view('home');				//HOME PAGE
			$this->load->view('footer');
		}
	}