<table class="table container">
    <thead>
    <tr>
        <th scope="col">iD</th>
        <th scope="col">Image</th>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantite</th>
        <th scope="col">Courte description</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
   //$cmpt = 1;
   foreach ($products as $product) {
        ?>
        <tr>
            <th scope="row"><?=$product->id  ?></th>
            <td><img height="100px" width="100px" src="<?=
             URI . $product->image;

               ?>" alt="">

            </td>
            <td><?=$product->name; ?></td>
            <td><?=$product->price; ?></td>
            <td><?= $product->quantity; ?></td>
            <td><?= $product->description; ?></td>
            <td class="row">
                <a class="btn btn-info col" href="<?= URI . "products/modifier/". $product->id ; ?>"><i class="bi bi-pencil-square"></i></a>


                <a class="btn btn-danger col" href=<?= URI . "products/supprimer/". $product->id ; ?>><i
                            class="bi bi-trash3"></i></a>

            </td>
        </tr>
        <?php
   }

    ?>

    </tbody>
</table>