<?php
require_once __DIR__ . '/../src/init.php';
function allProduct($laDb){
    $query = $laDb->prepare('SELECT nom FROM produit');
    $query->execute();
    $allProduct = $query->fetchAll();
    $existing_pages = [];
    foreach($allProduct as $product){
        array_push($existing_pages, $product["nom"]);
    }
    return $existing_pages;
}
$existing_product = allProduct($db);

$page = 'home';

if (isset($_GET['p'])) {
    if (in_array($_GET['p'], $existing_pages)) {
        $page = $_GET['p'];
        if(in_array($_GET['slug'], $existing_product)){
            $page = "product";
        }elseif($_GET['slug']!=""){
            $page = '404';
        }
    } else {
        $page = '404';
    }
}

require_once __DIR__ . '/../src/views/partials/navbar.php';
require_once __DIR__ . '/../src/views/partials/footer.php';
require_once __DIR__ . '/../src/views/pages/'. $page .'.php';

require_once __DIR__ . '/../src/views/template.php';
