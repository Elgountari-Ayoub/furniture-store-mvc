<?php
class Product
{
  private $db;

  public function __construct()
  {
    // echo 'hh';
    $this->db = new Database;
  }
  // Get All Products
  public function getProducts()
  {

    $this->db->query("SELECT * FROM Products");
    // $this->db->query("SELECT *, 
    //                     Products.id as ProductId, 
    //                     users.id as userId
    //                     FROM Products 
    //                     INNER JOIN users 
    //                     ON Products.user_id = users.id
    //                     ORDER BY Products.created_at DESC;");

    $results = $this->db->resultset();

    return $results;
  }

  // Get Product By ID
  public function getProductById($id)
  {
    $this->db->query("SELECT * FROM Products WHERE id = :id");

    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  // Add Product
  public function addProduct($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO Products (id_admin, img, title, price, reviewsCount, starsCount) 
      VALUES (
        :id_admin, :img, :title, :price, :reviewsCount, :starsCount
        )');

    // Bind Values
    $this->db->bind(':id_admin', $data['user_id']);
    $this->db->bind(':img', $data['img']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':price', $data['price']);
    $this->db->bind(':reviewsCount', $data['reviewsCount']);
    $this->db->bind(':starsCount', $data['starsCount']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // Update Product
  public function updateProduct($data)
  {
    // echo 'hh';
    // exit;
    // Prepare Query
    $this->db->query('UPDATE Products SET 
    img  = :img ,
    title  = :title ,
    price  = :price ,
    reviewsCount  = :reviewsCount ,
    starsCount  =  :starsCount
    WHERE id = :id ');

    // Bind Values

    $this->db->bind(':img', $data['img']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':price', $data['price']);
    $this->db->bind(':reviewsCount', $data['reviewsCount']);
    $this->db->bind(':starsCount', $data['starsCount']);
    $this->db->bind(':id', $data['id']);

    //Execute
    // die('Hello mother fucker');
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // Delete Product
  public function deleteProduct($id)
  {
    // Prepare Query
    $this->db->query('DELETE FROM Products WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $id);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
