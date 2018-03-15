<?php
	class FilterModel extends CI_Model{
		public function close(){
			$query="SELECT * FROM cart WHERE order_status = 'DELIVERED'";
			return $this->db->query($query);
		}
		public function process(){
			$query="SELECT * FROM cart WHERE order_status = 'On Process...'";
			return $this->db->query($query);
		}
		public function cancel(){
			$query="SELECT * FROM cart WHERE order_status = 'CANCELLED'";
			return $this->db->query($query);
		}
	}