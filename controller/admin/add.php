<?php
//2ème request 
if (isset($_POST['ok'])) {
    require_once "../../model/crud_produit.php";
    $crud = new Crud_produit();
    $lib = htmlspecialchars($_POST['lib']);
    $qte = htmlspecialchars($_POST['qte']);
    $pu = htmlspecialchars($_POST['pu']);
    $des = htmlspecialchars($_POST['des']);
    $img = htmlspecialchars($_POST['img']);
    $pro = htmlspecialchars($_POST['pro']);
    $produit = new produit(null, $lib, $pu, $qte, $des, $img, $pro);
    // le controller communique avec le model
    $res = $crud->add($produit);

    if ($res) {
        header("location:findAll.php");
        exit;
    }
} else  // il s'agit de la première request : affichage du formulaire vide
    include "../../view/admin/add.php";