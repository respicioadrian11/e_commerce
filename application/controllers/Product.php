<?php
	class Product extends CI_Controller{

		public function index(){

			$data['title'] = 'Product Management';

			$this->load->view('header', $data);
			$this->load->view('product',$data);
			$this->load->view('footer');
		}
//Save item Admin Part
		public function saveProduct(){

			$config = array(
			'upload_path' => "assets/images/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "768",
			'max_width' => "1024"
			);
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('userfile')){
				$errors = array('error' => $this->upload->display_errors());
				$image='noimage.jpg';
			}else{
				$data = array('upload_data' => $this->upload->data());
				$image= $_FILES['userfile']['name'];
			}
		#INITIALIZE POSTED DATA
		$prodName    = $this->input->post("prodName");
		$prodCode    = $this->input->post("prodCode");
		$prodStock   = $this->input->post("prodStock");
		$prodPrice   = $this->input->post("prodPrice");
		$image       = $image;
		$prodID 	 = $this->input->post("prodID");
		#DEFAULT MESSAGE
		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "error";
		$return['status']	 = 0;

		#CHCKING REQUIRED DATA
		if ($prodName == "") {
			$return['message'] = "Product Name is required!";
		}
		elseif ($prodCode  == "") {
			$return['message'] = "Product Code is required!";
		}
		elseif ($prodStock == "" || $prodStock == 0) {
			$return['message'] = "Stock is required!";
		}
		elseif ($prodPrice == "" || $prodPrice == 0) {
			$return['message'] = "Price is required!";
		}
		else{
			$this->load->model('productModel');

			#CHECK IF PRODUCT ALREADY EXIST
			$result = $this->productModel->checkProduct($prodName, $prodID);
			if ($result->num_rows() > 0) {
				$return['message'] = "Product already exist!";
			}
			else{

				$data = [$prodName, $prodCode, $prodStock, $prodPrice, $image];

				#UPDATE DATA IF PRODID IS NUMERIC
				if (is_numeric($prodID)) {
					$data[] = $prodID;
					$this->productModel->updateProduct($data);
					$return['message'] = "Product successfully updated!";
				} else{
					$this->productModel->saveProduct($data);
					$return['message'] = "Product successfully added!";
				}
				$return['status']	 = 1;
				$return['type'] = "success";
			}
		}


		echo json_encode($return);
	}

//GET PRODUCT VIEWS
	public function getProducts(){
		$data = null;
		$this->load->model('productModel');
		$result = $this->productModel->getProducts();
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

	
//GET PRODUCT FOR UPDATE
	public function getProduct(){
		$data = null;
		$prodID = $this->input->post('prodID');
		$this->load->model('productModel');
		$result = $this->productModel->getProduct($prodID);
		if ($result->num_rows() > 0) {
			$data = $result->row_array();
		}
		echo json_encode($data);
	}
//DELETE PRODUCT ADMIN
	public function deleteProduct(){
		$prodID = $this->input->post("prodID");
		$this->load->model('productModel');

		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "danger";

		$this->productModel->deleteProduct($prodID);
		if ($this->db->affected_rows() > 0) {
			$return['message'] = "Product successfully deleted!";
			$return['type']		 = "success";
		}
		echo json_encode($return);
	}
	//LOGIN
	public function enter(){
		if($this->session->userdata('username') != '')
			{
				redirect(base_url().'product');	
		}else{
			redirect('home');
		}
	}
//LOGOUT
	function logout()
	{
		$this->session->unset_userdata('username');
		redirect('home');
	}
}