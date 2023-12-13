<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container mt-3">
  <h2>Add New Product</h2>
  <div class="row mt-3">
    <div class="col-md-6">
      <form method="post" action="/product/save">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" />
        </div>
        <div class="mb-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="number" class="form-control" id="stock" name="stock"/>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" name="price"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>