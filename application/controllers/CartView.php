<?php
	class CartView extends CI_Controller{
		
		public function index(){

			$data['title'] ='Cart';
			$this->load->view('header2',$data);
			$this->load->view('cartview');
			$this->load->view('footer');


		}
//GETTING ITEMS VIEW BY USER
		public function getItems(){
		$data = null;
		$username = $this->session->userdata('usernamec');
		$this->load->model('ViewModel');
		$result = $this->ViewModel->getItems($username);
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

	//CART VIEW BY ADMIN
		public function admincart(){
			$data['title']="Manage Cart";
			$this->load->view('header', $data);
			$this->load->view('cart-admin');
			$this->load->view('footer');
		}
//DELETE ITEM IN CART
	public function deleteItem(){
		$prodID = $this->input->post("prodID");
		$this->load->model('viewModel');
		$this->viewModel->deleteItem($prodID);
		if ($this->db->affected_rows() > 0) {
			$return['message'] = "Item Successfully Deleted!";
			$return['type']		 = "success";
		}
		echo json_encode($return);
	}
//VIEW ALL CART ITEMS ADMIN
	public function getItemss(){
		$data = null;
		$this->load->model('ViewModel');
		$result = $this->ViewModel->getItemss();
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}
//CANCELLING ORDERS CUSTOMER
	public function editItems(){
		$prodID = $this->input->post("prodID");
		$this->load->model('viewModel');
		$this->viewModel->editItems($prodID);
		if ($this->db->affected_rows() > 0) {
			$return['message'] = "Item Successfully Cancelled!";
			$return['type']		 = "success";
			
		}
		echo json_encode($return);
	}
//UPDATING ORDER STATUS TO DELIVER ADMIN
	public function updateItems(){
		$prodID = $this->input->post("prodID");
		$this->load->model('viewModel');
		$this->viewModel->updateItems($prodID);
		if ($this->db->affected_rows() > 0) {
			$return['message'] = "Item Status Successfully Updated!";
			$return['type']		 = "success";
		}
		echo json_encode($return);
	}

}