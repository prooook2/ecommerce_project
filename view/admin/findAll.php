<?php
ob_start();
?>
<a href="../../controller/admin/add.php" class="btn btn-secondary btn-lg float-end">
    Ajout d'un produit
</a>
<table id="example" class="table">
    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Action</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($LesProduits as $produit) {
        ?>
            <tr>
                <td><?= $produit[0] ?></td>
                <td><?= $produit[1] ?></td>
                <td><?= $produit[2] ?></td>
                <td><?= $produit[3] ?></td>
                <td><a href="detail.php?id=<?= $produit[0] ?>" class="btn btn-info btn-sm">Voir détail...</a></td>
                <td><a href="delete.php?id=<?= $produit[0] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
                <td><a href="update.php?id=<?= $produit[0] ?>" class="btn btn-dark btn-sm">Editer</a></td>
            </tr>


        <?php
        }

        ?>
    </tbody>
</table>
<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php" ?>