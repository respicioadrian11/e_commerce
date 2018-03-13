<?php

	class LoginModel extends CI_Model{

		public function userlogin($username, $password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query= $this->db->get('admin');			


				if($query->num_rows()>0)
				{
				$userdata = array(
						'user_id'=>$query->row(0)->id,
						'name'=>$query->row(0)->name,
						'address'=>$query->row(0)->address,
						'username'=>$username,
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
    		
}