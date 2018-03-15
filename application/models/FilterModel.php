<?php
	class FilterModel extends CI_Model{
		public function close(){
			$query="SELECT * FROM cart WHERE order_status = 'DELIVERED'";		//FILTER BY CLOSE QUERY
			return $this->db->query($query);
		}
		public function process(){
			$query="SELECT * FROM cart WHERE order_status = 'On Process...'";		//FILTER BY PROCESS QUERY 
			return $this->db->query($query);
		}
		public function cancel(){
			$query="SELECT * FROM cart WHERE order_status = 'CANCELLED'";				//FILTER BY CANCEL QUERY
			return $this->db->query($query);
		}
	}