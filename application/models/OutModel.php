<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OutModel extends CI_Model
{
  public function getProducts(){
    $query = "SELECT * FROM products WHERE stock = '0'";      //OUT OF STOCK ITEM QUERY
    return $this->db->query($query);
  }

  public function getProduct($outID){
    $query = "SELECT * FROM products WHERE id = ?";  
    return $this->db->query($query, [$outID]);
  }

  public function saveProduct($data)
  {
    $query = "INSERT INTO products (product_name, product_code, stock, price, image) VALUES(?, ?, ?, ?, ?)";
    $this->db->query($query, $data);
  }

  public function updateProduct($data)
  {
    $query = "UPDATE products SET product_name = ?, product_code = ?, stock = ?, price = ?, image = ? WHERE id = ?";
    $this->db->query($query, $data);
  }

  public function checkProduct($prodname, $outID){
    $where  = "";
    $data[] = $prodname;
    if(is_numeric($outID)){
      $where  = "AND id != ?";
      $data[] = $prodID;
    }
    $query = "SELECT * FROM products WHERE product_name = ? $where";
    return $this->db->query($query, $data);
  }

  public function deleteProduct($outID){
    $query = "DELETE FROM products WHERE id = ?";
    $this->db->query($query, $outID);
  }
}

 ?>
