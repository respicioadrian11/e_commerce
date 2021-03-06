<?php
	class ViewModel extends CI_Model{
		
		public function getItems($username){

			$query = "SELECT * FROM cart WHERE username = ?";			//CUSTOMER CART VIEW BY USERNAME
			return $this->db->query($query, $username);
		}

		public function getItemss(){

			$query = "SELECT * FROM cart";						//ADMIN CART VIEW
			return $this->db->query($query);
		}

		public function updateItems($prodID)
  		{
    		$query = "UPDATE cart SET order_status = 'DELIVERED' WHERE id = ?";			//CART UPDATE ITEMS
    		$this->db->query($query, $prodID);
  		}
 		 public function deleteItem($prodID){
    		$query = "DELETE FROM cart WHERE id = ?";				//CART DELETE ITEM
    		$this->db->query($query, $prodID);
  		}

  		public function editItems($prodID){
  			$query = "UPDATE cart SET order_status = 'CANCELLED' WHERE id = ?"; 
  			return $this->db->query($query, $prodID);
  		}

}