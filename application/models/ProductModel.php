<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model
{
  public function getProducts(){
    $query = "SELECT * FROM products WHERE stock != '0'";
     return $this->db->query($query);   //GETTING ALL ITEMS WITH STOCKS 
  }

  public function getProduct($prodID){
    $query = "SELECT * FROM products WHERE id = ?";
    return $this->db->query($query, [$prodID]);
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

  public function checkProduct($prodname, $prodID){
    $where  = "";
    $data[] = $prodname;
    if(is_numeric($prodID)){
      $where  = "AND id != ?";
      $data[] = $prodID;
    }
    $query = "SELECT * FROM products WHERE product_name = ? $where";
    return $this->db->query($query, $data);
  }

  public function deleteProduct($prodID){
    $query = "DELETE FROM products WHERE id = ?";
    $this->db->query($query, $prodID);
  }
}

 ?>
