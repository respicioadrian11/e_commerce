<?php
	class Filter extends CI_Controller{

		public function index(){

			$this->load->view('header');
			$this->load->view('filter');
			$this->load->view('footer');
		}

		public function filter1(){
			$this->load->view('header');
			$this->load->view('filter1');
			$this->load->view('footer');
		}

		public function filter2(){
			$this->load->view('header');
			$this->load->view('filter2');
			$this->load->view('footer');
		}

		public function close(){
		$data = null;
		$this->load->model('filterModel');
		$result = $this->filterModel->close();
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

		public function process(){
		$data = null;
		$this->load->model('filterModel');
		$result = $this->filterModel->process();
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

		public function cancel(){
		$data = null;
		$this->load->model('filterModel');
		$result = $this->filterModel->cancel();
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

}