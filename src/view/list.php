<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Price Old</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key=> $product):  ?>

    <tr>
        <th scope="row"><?php echo ++$key ?></th>
        <td><?php echo $product->name ?></td>
        <td>
            <img src="<?php echo $product->image ?>" alt="" width="80px">
        </td>
        <td><?php echo  $product->price ?> VND</td>
        <td><?php echo  $product->priceOld ?> VND</td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>