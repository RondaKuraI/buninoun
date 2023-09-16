<?= $this->include('inc/top') ?>
<div class="container mt-3">
  <h2>Dark Striped Table</h2>
  <a href="<?= base_url('add') ?>">Add</a>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>UPC</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Expiry_Date</th>
        <th>Created_At</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($product as $k): ?>
                <tr>
                    <td><?= $k['ID'] ?></td>
                    <td><?= $k['UPC'] ?></td>
                    <td><?= $k['Name'] ?></td>
                    <td><?= $k['Quantity'] ?></td>
                    <td><?= $k['Price'] ?></td>
                    <td><?= $k['Expiry_Date'] ?></td>
                    <td><?= $k['Created_At'] ?></td>
                </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>