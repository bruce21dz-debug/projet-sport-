<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online | Ajouter les Produits</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Les Jeux - la billetterie</h2>
                <img src="logo.png" alt="logo" width="450px">
                <input type="text" name='name'placeholder="Nom du Produit">
                <br>
                <input type="text" name='price'placeholder="Prix du produit">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> Ajouter un photo de Produit</label>
                <button name='upload'>Telecharger un Produit✅</button>
                <br><br>
                <a href="products.php">Afficher les Produits</a>
            </form>
        </div>
        <p>Developer By KIB</p>
    </center>
</body>
</html>