<?php
	class Reports extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->library('Pdf');
		
	}
	public function index(){
		$this->load->view('reports');
	}

	public function transactions(){
		$this->load->view('reports1');
	}
	public function transactions_on(){
		$this->load->view('reports2');
	}
	public function canceltransactions(){
		$this->load->view('reports3');
	}
			
}

		