<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once "../../model/Crud_produit.php";
    $crud = new Crud_produit();

    $produit = $crud->find($id); //  produit sous forme de tableau numérique
    //etape 2 : transmettre le resultat à la vue :view/admin/detail.php
    include "../../view/admin/detail.php";
}