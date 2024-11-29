<?php
require_once "../../model/crud_produit.php";
$crud = new Crud_produit();
$id = $_GET['id'];
$res = $crud->delete($id);
if ($res) {
    header("location:findAll.php");
    exit;
}