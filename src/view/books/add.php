

<form action="index.php?page=books&action=store" method="post">
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Total</label>
        <input type="number" name="total" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php?page=books&action=show-list">Cancel</a>
</form>
