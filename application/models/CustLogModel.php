<?php

	class CustLogModel extends CI_Model{

		public function userlogin($username, $password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query= $this->db->get('customer');			


				if($query->num_rows()>0)
				{
				$userdata = array(
						'user_id'=>$query->row(0)->id,
						'name'=>$query->row(0)->fullname,
						'address'=>$query->row(0)->address,
						'contact'=>$query->row(0)->contnumber,
						'usernamec'=>$username,
						'password'=>$password,
						'logged_in'=>TRUE
				);
				$this->session->set_userdata($userdata);
						return true;
				}else{
					return false;
				}
					echo json_encode($data);
			
			
		}

		public function registration($data){
			$query = "INSERT INTO customer (fullname, address, contnumber, username, password) VALUES(?, ?, ?, ?, ?)";
    		$this->db->query($query, $data);
		}

		public function checkUser($reg_username, $userID){
    		$where  = "";
    		$data[] = $reg_username;
    		if(is_numeric($userID)){
     		 $where  = "AND id != ?";
      		$data[] = $userID;

      		 }
    			$query = "SELECT * FROM customer WHERE username = ? $where";
    			return $this->db->query($query, $data);
 			 
    }				

 		 
    		
}