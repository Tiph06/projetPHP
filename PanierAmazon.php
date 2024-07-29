<?php

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    
    $cart_data = json_decode ($_POST ['cart_data'] , true);

    if ($cart_data) {

        echo '<h1>Votre Commande</h1>';

        echo '<ul>';

        $total = 0;

        foreach ($cart_data as $item) {

            echo '<li>' . htmlspecialchars ($item ['product']) . ' - $' . number_format ($item ['price'], 2) . '</li>';

            $total += $item ['price'];

        }

        echo '</ul>';

        echo '<p>Total: $' . number_format ($total, 2) . '</p>';

    }
    
    else {

        echo '<p>Votre panier est vide.</p>';
    }

}

?>

<!DOCTYPE html>

<html lang="fr">
    
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panier lotus spirit</title>

    <link rel = "stylesheet" href = "PanierAmazon.css">

    <script src = "PanierAmazon.js"></script>

</head>

<body>

    <h1 class="test">Panier d'Achat</h1>

    <div id = "products">

        <h2>Produits Disponibles</h2>

        <button onclick = "addToCart ('Produit 1', 1490.00)">Ajouter Produit 1 - 1490.00 €</button>

        <button onclick = "addToCart ('Produit 2', 1359.00)">Ajouter Produit 2 - 1359.00 €</button>

        <button onclick = "addToCart ('Produit 3', 100000.00)">Ajouter Produit 3 - 100000.00 €</button>

        <button onclick = "addToCart ('Produit 4', 14000.00)">Ajouter Produit 4 - 14000.00 €</button>

        <button onclick = "addToCart ('Produit 5', 109.99)">Ajouter Produit 5 - 109.99 €</button>

    </div>

    <div id = "cart">

        <h2>Votre Panier</h2>

        <ul id = "cart-items"></ul>

        <p>Total: €<span id = "total">0.00</span></p>

        <form method = "POST" action = "checkout.php">

            <input type = "hidden" name = "cart_data" id = "cart_data">

            <button type = "submit">Passer la Commande</button>

        </form>

    </div>

</body>

</html>