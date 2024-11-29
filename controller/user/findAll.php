
<?php
//Etape 1: controller communique avec le model
require_once "../../model/Crud_produit.php";
$crud = new Crud_produit();

$LesProduits = $crud->findAll(); // un tableau de produit
//etape 2 : transmettre le resultat à la vue :view/admin/findAll.php
include "../../view/user/findAll.php";