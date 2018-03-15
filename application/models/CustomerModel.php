<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class CustomerModel extends CI_Model {
			public function getItems(){
    		$query = "SELECT * FROM products";
    		return $this->db->query($query);
    		if($query->num_rows()>0)
				{
				$productdata = array(
						'product_id'=>$query->row(0)->id,
						'productName'=>$query->row(0)->product_name,
						'productCode'=>$query->row(0)->product_code,
						'productStock'=>$query->row(0)->stock,
						'productPrice'=>$query->row(0)->price,
						'productImage'=>$image,
				);
				$this->session->set_userdata($productdata);
						return true;
				}else{
					return false;
				}
					echo json_encode($data);
			
  		}

  			public function getItem($prodID){
    		$query = "SELECT * FROM products WHERE id = ?";
    		return $this->db->query($query, [$prodID]);
  		}

  		 	public function saveItem($data)
  			{
    		$query = "INSERT INTO cart (productname, productcode, price, quantity, totalprice, mode, custname, username, custaddress, custnumber) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    		$this->db->query($query, $data);
  		}

	}
?>