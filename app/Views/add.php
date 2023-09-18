<?= $this->include('inc/top') ?>
<div class="container mt-3">
  <h2>Add Products</h2>
  <a href="<?= base_url('add') ?>">Add</a>
  <form action = "/save" method = "post">
    <label>ID</label>
    <input type = "text" name = "ID" class = "form-control" placeholder = "ID">
    <label>UPC</label>
    <input type = "text" name = "UPC" class = "form-control" placeholder = "UPC" value = "<?= $pro['UPC']?>">
    <label>Name</label>
    <input type = "text" name = "Name" class = "form-control" placeholder = "Name">
    <label>Quantity</label>
    <input type = "text" name = "Quantity" class = "form-control" placeholder = "Quantity">
    <label>Price</label>
    <input type = "text" name = "Price" class = "form-control" placeholder = "Price">
    <label>Expiry_Date</label>
    <input type = "date" name = "Expiry_Date" class = "form-control" placeholder = "Expiry Date">
    <br>
    <button type = "submit" class = "btn btn-primary">Save</button>
  </form>
</div>