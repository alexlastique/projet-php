<?php
require_once __DIR__ . '/../../src/init.php';
?>
<script>
let panier = [];
function ajouterAuPanier(produit) {
  panier.push(produit);
  console.log(`${produit.nom} a été ajouté au panier.`);
}
function afficherPanier() {
  let contenuPanier = "<h2>Mon Panier</h2><ul>";

  for (let produit of panier) {
    contenuPanier += `<li>${produit.nom} - ${produit.prix}€</li>`;
  }

  contenuPanier += "</ul>";
  console.log(contenuPanier);
}
function viderPanier() {
  panier = [];
  console.log("Le panier a été vidé.");
}