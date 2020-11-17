<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3>Product Lists</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($product as $row):?>
                <tr>
                    <td><?= $row->productName;?></td>
                    <td><?= $row->buyPrice;?></td>
                    <td><?= $row->productLine;?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->productCode;?>" data-name="<?= $row->product_name;?>" data-price="<?= $row->product_price;?>" data-category_id="<?= $row->product_category_id;?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->productCode;?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
 
    </div>
     
    <!-- Modal Add Product-->
    <form action="/product/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="productName" placeholder="Product Name">
                </div>

                <div class="form-group">
                    <label>Product Scale</label>
                    <input type="text" class="form-control" name="productScale" placeholder="Product Scale">
                </div>


                <div class="form-group">
                    <label>Product Vendor</label>
                    <input type="text" class="form-control" name="productVendor" placeholder="Product Vendor">
                </div>

                <div class="form-group">
                    <label>Product Description</label>
                    <input type="text" class="form-control" name="productDescription" placeholder="Product Description">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select name="product_category" class="form-control">
                        <option value="">-Select-</option>
                        <?php foreach($category as $row):?>
                        <option value="<?= $row->productLine;?>"><?= $row->productLine;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stock</label>
                    <input type="text" class="form-control" name="buyPrice" placeholder="Stock">
                </div>
                 
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="buyPrice" placeholder="Product Price">
                </div>
 
                <div class="form-group">
                    <label>MSRP</label>
                    <input type="text" class="form-control" name="MSRP" placeholder="MSRP">
                </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Product-->
 
    <!-- Modal Edit Product-->
    <form action="/product/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="modal-body">
             
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="productName" placeholder="Product Name">
                </div>

                <div class="form-group">
                    <label>Product Scale</label>
                    <input type="text" class="form-control" name="productScale" placeholder="Product Scale">
                </div>


                <div class="form-group">
                    <label>Product Vendor</label>
                    <input type="text" class="form-control" name="productVendor" placeholder="Product Vendor">
                </div>

                <div class="form-group">
                    <label>Product Description</label>
                    <input type="text" class="form-control" name="productDescription" placeholder="Product Description">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select name="product_category" class="form-control">
                        <option value="">-Select-</option>
                        <?php foreach($category as $row):?>
                        <option value="<?= $row->productLine;?>"><?= $row->productLine;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stock</label>
                    <input type="text" class="form-control" name="buyPrice" placeholder="Stock">
                </div>
                 
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="buyPrice" placeholder="Product Price">
                </div>
 
                <div class="form-group">
                    <label>MSRP</label>
                    <input type="text" class="form-control" name="MSRP" placeholder="MSRP">
                </div>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="productCode" class="productCode">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
 
    <!-- Modal Delete Product-->
    <form action="/product/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Are you sure want to delete this product?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="productCode" class="productID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    </div>
    <!-- End Modal Delete Product-->
    <?= $this->endSection() ?>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const price = $(this).data('price');
            const category = $(this).data('category_id');
            // Set data to Form Edit
            $('.productCode').val(id);
            $('.product_name').val(name);
            $('.product_price').val(price);
            $('.product_category').val(category).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
         
    });
</script>
</body>
</html>