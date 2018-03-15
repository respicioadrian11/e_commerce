<?php
class CustomerLogin extends CI_Controller{

	public function index(){

		$data['title']='LOGIN';
		

		$this->load->view('header2', $data);
		$this->load->view('customerlogin');
		$this->load->view('footer');
	}
	
	public function registration(){
		$name          =$this->input->post("reg_name");
		$address  	   =$this->input->post("address");
		$contact 	   =$this->input->post("contact");
		$reg_username  =$this->input->post("reg_username");
		$reg_password  =$this->input->post("reg_password");
		$userID        =$this->input->post("userID");

		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "error";
		$return['status']	 = [];

		if($name==""){
			$return['message'] = "Name is Required!";
		}
		elseif($address==""){
			$return['message'] = "Address is Required!";
		}
		elseif($contact==""){
			$return['message'] = "Contact is Required!";
		}
		elseif($reg_username==""){
			$return['message'] = "Username is Required!";
		}
		elseif($reg_password == ""){
			$return['message'] = "Password is Required!";
		}else{
			$this->load->model('custlogModel');

			$result = $this->custlogModel->checkUser($reg_username, $userID);
			if ($result->num_rows() > 0) {
				$return['message'] = "Username already exist!";
			}
			else{

				$data = [$name, $address, $contact, $reg_username, $reg_password];

					$this->custlogModel->registration($data);
					$return['message'] = "Register Successfully!";
					$return['status']	 = 1;
					$return['type'] = "success";
		
			}
		}

		echo json_encode($return);
	}

	public function userlogin(){
		$username	=$this->input->post("username");
		$password	=$this->input->post("password");
		

		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "error";
		$return['status']	 = [];

		if($username==""){
			$return['message'] = "Username is Required!";
		}
		elseif($password==""){
			$return['message'] = "Password is Required!";
		}else{

			//model function
			$this->load->model('custlogModel');
			if($this->custlogModel->userlogin($username, $password)){
							//$session_data = array(

							//'username'=> $username,
							//'name'=> ('name'),
							//'address'=>'address',
							//'birthday'=>'birthday',
							//'gender'=>'gender',
							//'logged_in'=> TRUE
							
	        				//);
				//$this->session->set_userdata($session_data);
				//$data['userdata'] = $this->session->userdata();
				$return['message']="WELCOME $username";
				$return['type']= "success";
				$return['status'] = 1;
				

			}else{
				$return['message']="invalid username or password!";
				
			}
		}
			echo json_encode($return);
	}

	

}

