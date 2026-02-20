<?php
    $title = 'Event';
    include 'partiel/header.php';
?>

<section class='baner' >
    <div class="container">            
        <div class="hero" id="hero">
            <div class="title">
                <span>Bienvenue chez AgriEdev Africa</span>
                <h1>L’agriculture autrement, ensemble,<br> connectée et partagée</h1>
                <div class="bouton">
                    <a href="" class="btn-un">Nos services</a>
                    <a href="" class="btn-deux">Nos événements</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partiel/mini.php'?>

<section class="event" id="event">
    <div class="container">
        <div class="title">
            <h2>AgriEdays</h2>
            <p>
                Depuis 2018, AgriEdays est devenu le rendez-vous panafricain des acteurs de l’agro-industrie, de la finance verte et de l’environnement.
                Nos événements visent à : <br>
                Promouvoir les innovations agricoles et les investissements durables ;
                Favoriser les échanges entre décideurs, chercheurs, investisseurs et producteurs ;
                Mettre en lumière les opportunités d’affaires agricoles en Afrique.
            </p>
            <a href="" class="btn-un">Nos événements</a>
        </div>
        <video controls width="100%">
            <source src="video/video.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture vidéo.
        </video>
    </div>
</section>

<section class="service" id="service">
    <div class="container">
        <div class="item">
            <div class="box">
                <h3>AgriE Academy</h3>
                <p>Un espace de formation et d’incubation de talents agro-entrepreneuriaux.</p>
                <a href="" class="btn-un">Voir plus</a>
            </div>

            <div class="box">
                <h3>AgriE Media</h3>
                <p>Un pôle média au service de la promotion agricole.</p>
                <a href="" class="btn-un">Voir plus</a>
            </div>

            <div class="box">
                <h3>AgriE Invest</h3>
                <p>Des produits d’investissement agricoles clés en main et rentables.</p>
                <a href="" class="btn-un">Voir plus</a>
            </div>
        </div>
    </div>
</section>


<?php
    include 'partiel/footer.php';
?>