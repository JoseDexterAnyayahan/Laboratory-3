<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('edit') ?>" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" id="editId">
                    <div class="mb-3">
                        <label for="editProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="editProductName" name="productName">
                    </div>
                    <div class="mb-3">
                        <label for="editCategory" class="form-label">Category</label>
                        <input type="text" class="form-control" id="editCategory" name="category">
                    </div>
                    <div class="mb-3">
                        <label for="editDetails" class="form-label">Details</label>
                        <textarea class="form-control" id="editDetails" name="details"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editPrice" class="form-label">Price</label>
                        <input type="text" class="form-control" id="editPrice" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="editAvailability" class="form-label">Availability</label>
                        <select class="form-select" id="editAvailability" name="availability">
                            <option value="in stock">In Stock</option>
                            <option value="out of stock">Out of Stock</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editImg" class="form-label">Image</label>
                        <input type="file" class="form-control" id="editImg" name="img">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>