<?= $this->include('inc/top') ?>
<div class="container mt-3">
  <h2>Dark Striped Table</h2>
  <a href="<?= base_url('add') ?>">Add</a>
  <form action = "/save" method = "post">
    <label>ID</label>
    <input type = "text" name = "ID" class = "form-control" placeholder = "ID">
    <label>UPC</label>
    <input type = "text" name = "UPC" class = "form-control" placeholder = "UPC">
    <label>Name</label>
    <input type = "text" name = "Name" class = "form-control" placeholder = "Name">
    <label>Quantity</label>
    <input type = "text" name = "Quantity" class = "form-control" placeholder = "Quantity">
    <label>Price</label>
    <input type = "text" name = "Price" class = "form-control" placeholder = "Price">
    <label>Expiry_Date</label>
    <input type = "text" name = "Expiry_Date" class = "form-control" placeholder = "Expiry Date">
    <label>Created_At</label>
    <input type = "text" name = "Created_At" class = "form-control" placeholder = "Created At">
    <br>
    <button type = "submit" class = "btn btn-primary">Save</button>
  </form>
</div>