<?php
	class OutStock extends CI_Controller{

		public function index(){

			$data['title'] = 'Product Management';

			$this->load->view('header', $data);
			$this->load->view('outstock',$data);
			$this->load->view('footer');
		}

		public function saveProduct(){

			$config = array(
			'upload_path' => "./assets/images/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "768",
			'max_width' => "1024"
			);
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$image='noimage.jpg';
			}else{
				$data = array('upload_data' => $this->upload->data());
				$image= $_FILES['userfile']['name'];
			}
		#INITIALIZE POSTED DATA
		$prodName    = $this->input->post("prodname");
		$prodCode    = $this->input->post("prodcode");
		$prodStock   = $this->input->post("prodstock");
		$prodPrice   = $this->input->post("prodprice");
		$image       = $image;
		$prodID 	 = $this->input->post("outID");
		#DEFAULT MESSAGE
		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "error";
		$return['status']	 = 0;

		#CHECKING OF POSTED DATA
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
			$this->load->model('outModel');

			#CHECK IF PRODUCT ALREADY EXIST
			$result = $this->outModel->checkProduct($prodName, $prodID);
			if ($result->num_rows() > 0) {
				$return['message'] = "Product already exist!";
			}
			else{

				$data = [$prodName, $prodCode, $prodStock, $prodPrice, $image];

				#UPDATE DATA IF PRODID IS NUMERIC
				if (is_numeric($prodID)) {
					$data[] = $prodID;
					$this->outModel->updateProduct($data);
					$return['message'] = "Product successfully updated!";
				} else{
					$this->outModel->saveProduct($data);
					$return['message'] = "Product successfully added!";
				}
				$return['status']	 = 1;
				$return['type'] = "success";
			}
		}


		echo json_encode($return);
	}


	public function getProducts(){
		$data = null;
		$this->load->model('outModel');
		$result = $this->outModel->getProducts();
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

	

	public function getProduct(){
		$data = null;
		$prodID = $this->input->post('outID');
		$this->load->model('outModel');
		$result = $this->outModel->getProduct($prodID);
		if ($result->num_rows() > 0) {
			$data = $result->row_array();
		}
		echo json_encode($data);
	}

	public function deleteProduct(){
		$prodID = $this->input->post("outID");
		$this->load->model('outModel');

		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "danger";

		$this->outModel->deleteProduct($prodID);
		if ($this->db->affected_rows() > 0) {
			$return['message'] = "Product successfully deleted!";
			$return['type']		 = "success";
		}
		echo json_encode($return);
	}
	
}