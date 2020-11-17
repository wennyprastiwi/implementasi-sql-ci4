<?php namespace App\Models;
use CodeIgniter\Model;
 

class ProductModel extends Model
{
     
    public function getCategory()
    {
        $builder = $this->db->table('productlines');
        return $builder->get();
    }
 
    public function getProduct()
    {
        $builder = $this->db->table('products');
        $builder->select('*');
        $builder->join('productlines as prol', 'prol.productLine = products.productLine','left');
        $builder->limit(5);
        return $builder->get();
    }
 
    public function saveProduct($data){
        $query = $this->db->table('products')->insert($data);
        return $query;
    }
 
    public function updateProduct($data, $id)
    {
        $query = $this->db->table('products')->update($data, array('productCode' => $id));
        return $query;
    }
 
    public function deleteProduct($id)
    {
        $query = $this->db->table('product')->delete(array('productCode' => $id));
        return $query;
    } 
 
   
}