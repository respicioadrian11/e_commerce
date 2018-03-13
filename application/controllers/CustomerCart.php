<?php
	class CustomerCart extends CI_Controller{
		public function index(){

			$data['title'] = 'Shopping Cart';

			$this->load->view('header1', $data);
			$this->load->view('cart');
			$this->load->view('footer');
		}
		public function getItem(){
			$data = null;
			$prodID = $this->input->post('prodID');
			$this->load->model('customerModel');
			$result = $this->customerModel->getItem($prodID);
			if ($result->num_rows() > 0) {
			$data = $result->row_array();
		}
		echo json_encode($data);
	}
		
		public function saveItem(){
		$prodname   	= $this->input->post("prodname");
		$prodcode   	= $this->input->post("prodcode");
		$prodprice   	= $this->input->post("prodprice");
		$quantity   	= $this->input->post("quantity");
		$totalprice 	= ($prodprice * $quantity);
		$option			=$this->input->post("option");
		$name   		= $this->input->post("name");
		$address   		= $this->input->post("address");
		$contact   		= $this->input->post("number");
		$prodID 	 	= $this->input->post("prodID");
		
			$this->load->model('customerModel');

				$data = [$prodname, $prodcode, $prodprice, $quantity, $totalprice, $option, $name, $address, $contact];
				$this->customerModel->saveItem($data);

				$return['message'] = "Product successfully added To Cart!";
				$return['status']	 = 1;
				$return['type'] = "success";

				echo json_encode($return);
	
	}

	
}			