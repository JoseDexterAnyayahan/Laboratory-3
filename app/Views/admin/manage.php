<!DOCTYPE html>
<html lang="en">
<?= $this->include('admin/includes/head') ?>

<body class="g-sidenav-show bg-gray-200">
  <?= $this->include('admin/includes/addpmodal.php') ?>
  <?= $this->include('admin/includes/editpmodal.php') ?>
  <?= $this->include('admin/includes/aside') ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <?= $this->include('admin/includes/navbar') ?>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <!-- Add Button -->
          <button type="button" class="btn btn-primary float-start" data-bs-toggle="modal"
            data-bs-target="#addProductModal">
            Add Product
          </button>
        </div>
      </div>

      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table id="productTable" class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Image
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          Availability</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          Action</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($products as $product): ?>
                        <tr>
                          <td>
                            <?= $product['id']; ?>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="<?= base_url() . $product['img']; ?>"
                                  class="avatar avatar-lg me-3 border-radius-lg" alt="<?= $product['productname']; ?>">
                              </div>
                            </div>
                          </td>
                          <td>
                            <?= $product['productname']; ?>
                          </td>
                          <td>
                            <?= $product['details']; ?>
                          </td>
                          <td class="align-middle">
                            <p class="text-sm font-weight-bold mb-0">₱
                              <?= $product['price']; ?>
                            </p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span
                              class="badge badge-sm <?= ($product['availability'] == 'in stock') ? 'bg-gradient-success' : 'bg-gradient-secondary'; ?>">
                              <?= $product['availability']; ?>
                            </span>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <button type="button" class="text-secondary font-weight-bold text-xs edit-btn"
                              data-bs-toggle="modal" data-bs-target="#editProductModal" data-id="<?= $product['id']; ?>"
                              data-productname="<?= $product['productname']; ?>"
                              data-category="<?= $product['category']; ?>" data-details="<?= $product['details']; ?>"
                              data-price="<?= $product['price']; ?>" data-availability="<?= $product['availability']; ?>"
                              data-img="<?= base_url() . $product['img']; ?>">
                              Edit
                            </button>


                            <a href="<?= base_url('delete/' . $product['id']) ?>"
                              class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                              data-original-title="Edit product">Delete</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?= $this->include('admin/includes/footer.php') ?>
      </div>
  </main>

  <!-- JavaScript code to populate the edit modal -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const editButtons = document.querySelectorAll('.edit-btn');
      const editForm = document.getElementById('editForm');

      editButtons.forEach(button => {
        button.addEventListener('click', function () {
          const id = this.getAttribute('data-id');
          const productName = this.getAttribute('data-productname');
          const category = this.getAttribute('data-category');
          const details = this.getAttribute('data-details');
          const price = this.getAttribute('data-price');
          const availability = this.getAttribute('data-availability');
          const img = this.getAttribute('data-img');

          // Log the data to the console
          console.log('Edit Button Clicked');
          console.log('Product ID:', id);
          console.log('Product Name:', productName);
          console.log('Category:', category);
          console.log('Details:', details);
          console.log('Price:', price);
          console.log('Availability:', availability);
          console.log('Image URL:', img);

          // Set the values in the edit modal
          document.getElementById('editId').value = id;
          document.getElementById('editProductName').value = productName;
          document.getElementById('editCategory').value = category;
          document.getElementById('editDetails').value = details;
          document.getElementById('editPrice').value = price;
          document.getElementById('editAvailability').value = availability;
          document.getElementById('editImg').value = img;
        });
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      $('#productTable').DataTable();
    });
  </script>



</body>

</html>