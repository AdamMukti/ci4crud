<?= $this->extend('layout/template') ?>


<?= $this->section('content') ?>
<div class="container mt-3">
  <h2>Crud Codeigniter 4</h2>
  <!-- <a type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a> -->
  <a type="button" class="btn btn-primary mb-3" href="/product/add">Add Product</a>

  <!-- <form action="" method="get">
    <div class="row">
      <div class="col-md-8">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukan kata kunci" name="katakunci"
            aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
        </div>
      </div>
    </div>
  </form> -->

  <div class="row">
    <div class="col-md-8">
      <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= session()->getFlashdata('success') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif ?>
      <div class="card mt-3">
        <h5 class="card-header">
        Product List 
          <!-- <h5 class="card-title"></h5> -->
        </h5>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($product as $p): ?>
                <tr>
                  <td class="align-middle">
                    <?= $p['id'] ?>
                  </td>
                  <td class="align-middle">
                    <?= $p['name'] ?>
                  </td>
                  <td class="align-middle">
                    <?= $p['stock'] ?>
                  </td>
                  <td class="align-middle">
                    <?= $p['price'] ?>
                  </td>
                  <td>
                    <a class="btn btn-warning btn-sm" href="/product/edit/<?= $p['id'] ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="/product/delete/<?= $p['id'] ?>">Delete</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" />
          </div>
          <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" />
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" />
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSave">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
  $('#btnSave').on('click', function () {
    let name = $('#name').val();
    let stock = $('#stock').val();
    let price = $('#price').val();

    $.ajax({
      url: ''
    })
  })
</script>

<?= $this->endSection() ?>