<div class="card">
    <div class="card-header">
        Book list
        <a class="btn btn-success" href="index.php?page=books&action=create">Add new</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($books) > 0) : ?>
                <?php foreach ($books as $key => $book): ?>
                <tr>
                    <th scope="row"><?php echo $key + 1?></th>
                    <td><?php echo $book['name'] ?></td>
                    <td><?php echo  $book['price'] ?></td>
                    <td><?php echo $book['total'] ?></td>
                    <td>
                        <a href="index.php?page=books&action=delete&id=<?php echo $book['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        <a href="index.php?page=books&action=update&id=<?php echo $book['id'] ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>

                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No data</td>
                </tr>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>


