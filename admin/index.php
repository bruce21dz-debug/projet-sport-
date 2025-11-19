
<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};




?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Statique avec Diaporama</title>
    <link rel="stylesheet" href="css/styleindex.css">
</head>
<body>

    <header class="header">
        <div class="logo">Mon Site</div>
        <nav class="nav">
            <a href="#accueil" class="nav-btn">Accueil</a>
            <a href="#services" class="nav-btn">Sports</a>
            <a href="products.php" class="nav-btn">Billetteris</a>

            <a href="#contact" class="nav-btn primary-btn">Contact</a>



        </nav>
    </header>

    <section class="diaporama-container">
        <h2>Articles à la Une</h2>

        <div class="carousel-wrapper">

            <article class="diaporama-item item-1">
                <img src="images/cycliste.jpg" alt="Photo de l'article 1" width="100%">
                <div class="item-content">
                    <h3>Titre du Premier Article</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt voluptatem adipisci qui consectetur tempora maiores voluptatibus obcaecati esse eius consequatur. Veritatis rem atque, laboriosam optio libero dolores eligendi ut rerum? Totam cum fugit nesciunt, ullam vero quis rerum beatae neque dolor exercitationem unde voluptate quibusdam reiciendis praesentium necessitatibus repudiandae animi.</p>
                    <a href="#" class="btn secondary-btn">Lire la suite</a>
                </div>
            </article>

            <article class="diaporama-item item-2">
                <img src="images/natation.jpg" alt="Photo de l'article 2">
                <div class="item-content">
                    <h3>Titre du Deuxième Article</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quibusdam deserunt quo enim dolor placeat consequuntur aspernatur quam praesentium voluptate delectus, saepe necessitatibus repellendus? Ab facere aperiam dolor, itaque numquam aspernatur dolores consequuntur quae possimus unde sapiente sint id blanditiis nihil optio ea autem. Voluptatum tempore consectetur inventore exercitationem quidem.</p>
                    <a href="#" class="btn secondary-btn">Détails</a>
                </div>
            </article>

        </div>

    </section>


    <section class="page-content">

        <h3>Bienvenue sur notre site</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci aperiam, aspernatur, nisi mollitia deserunt omnis laborum nostrum quisquam officiis nemo eius? Ipsa cumque enim a tempora ullam inventore vel accusamus! Eos, dignissimos unde iusto tenetur ea ab architecto necessitatibus in, impedit accusamus, cum iure obcaecati maxime cumque qui rerum labore? Quia suscipit consequatur sequi mollitia officiis modi sed in quam, magni, ex nesciunt facere aperiam nihil exercitationem doloribus quae quo et? Temporibus ex excepturi dolore sint itaque inventore error soluta perspiciatis. Iusto vero explicabo laborum debitis deserunt, deleniti illum eveniet minima nobis nam sapiente veritatis? Impedit sint deleniti cumque sit.</p>

    </section>
    <footer>

    <div class="contact">
            <h3>Contactez-nous :</h3>
            <a href="#">📧 Email: contact@monsite.com</a>
            <a href="#">📞 Téléphone: +33 1 23 45 67 89</a>
            <a href="#">📍 Adresse: 123 Rue du Stade, 75001 Paris, France</a>
    </div>
    </footer>

</body>
</html>