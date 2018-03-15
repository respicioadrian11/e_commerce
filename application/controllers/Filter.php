<?php
	class Filter extends CI_Controller{

		public function index(){

			$this->load->view('header');
			$this->load->view('filter');	//FILTER VIEW
			$this->load->view('footer');
		}

		public function filter1(){
			$this->load->view('header');
			$this->load->view('filter1');		//FILTER VIEW
			$this->load->view('footer');
		}

		public function filter2(){
			$this->load->view('header');
			$this->load->view('filter2');		//FILTER VIEW
			$this->load->view('footer');
		}

		public function close(){
		$data = null;
		$this->load->model('filterModel');
		$result = $this->filterModel->close();  //FILTER VIEW BY CLOSE TRANSACTIONS
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

		public function process(){
		$data = null;
		$this->load->model('filterModel');
		$result = $this->filterModel->process();		//FILTER VIEW BY ON GOING TRANSACTIONS
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

		public function cancel(){
		$data = null;
		$this->load->model('filterModel');
		$result = $this->filterModel->cancel();			//FILTER VIEW BY CANCELLED TRANSACTIONS
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

}