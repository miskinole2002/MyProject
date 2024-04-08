<h1 class="text-center"> TABLEAU UTILISATEURS</h1>

<table class="table container">

    <thead>
    <tr>
        <th scope="col">iD</th>
        <th scope="col">nom d'utilisateur </th>
        <th scope="col">Email</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Role</th>
        <th scope="col">Numero de telephone</th>
    </tr>
    </thead>
    <tbody>
    <?php

   //$cmpt = 1;
   
    foreach ($users as $user) {
       ?>
        <tr>
            <th scope="row"><?=$user->id  ?></th>
            <td><?= $user->user_name ?>

              

            </td>
            <td><?=$user->email ?></td>
            <td><?=$user->fname; ?></td>
            <td><?= $user->lname; ?></td>
            <td><?= $user->role_id; ?></td>
            <td><?= $user->numero_telephone; ?></td>

            <td class="row">
                <a class="btn btn-info col" href="<?= URI . "users/modifier/". $user->id; ?>"><i class="bi bi-pencil-square"></i></a>


                <a class="btn btn-danger col" href=<?= URI . "users/supprimer/" . $user->id; ?>><i
                            class="bi bi-trash3"></i></a>

            </td>
        </tr>
       <?php
   }

    ?> 

    </tbody>
</table>