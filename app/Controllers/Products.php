<?php namespace App\Controllers;	
 
 use CodeIgniter\Controller;
 use App\Models\ProductModel;
  
 class Products extends Controller
 {
     public function index()
     {
         $model = new ProductModel();
         $data['product']  = $model->getProduct()->getResult();
         $data['category'] = $model->getCategory()->getResult();
         echo view('product_view', $data);
     }
  
     public function save()
     {
         $model = new ProductModel();
         $data = array(
             'productName'        => $this->request->getPost('productName'),
             'productLine'       => $this->request->getPost('productLine'),
             'productScale' => $this->request->getPost('productScale'),
             'productVendor' => $this->request->getPost('productVendor'),
             'productDescription' => $this->request->getPost('productDescription'),
             'quantityInStock' => $this->request->getPost('quantityInStock'),
             'buyPrice' => $this->request->getPost('buyPrice'),
             'MSRP' => $this->request->getPost('MSRP'),
         );
         $model->saveProduct($data);
         return redirect()->to('/products');
     }
  
     public function update()
     {
         $model = new ProductModel();
         $id = $this->request->getPost('productCode');
         $data = array(
             'productName'        => $this->request->getPost('productName'),
             'productLine'       => $this->request->getPost('productLine'),
             'productScale' => $this->request->getPost('productScale'),
             'productVendor' => $this->request->getPost('productVendor'),
             'productDescription' => $this->request->getPost('productDescription'),
             'quantityInStock' => $this->request->getPost('quantityInStock'),
             'buyPrice' => $this->request->getPost('buyPrice'),
             'MSRP' => $this->request->getPost('MSRP'),
         );
         $model->updateProduct($data, $id);
         return redirect()->to('/products');
     }
  
     public function delete()
     {
         $model = new ProductModel();
         $id = $this->request->getPost('productCode');
         $model->deleteProduct($id);
         return redirect()->to('/products');
     }
  
 }