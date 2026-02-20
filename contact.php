<?php
    $title = 'Contact';
    include 'partiel/header.php';
?>

<section class='baner' >
    <div class="container">            
        <div class="hero" id="hero">
            <div class="title">
                <span>Bienvenue chez AgriEdev Africa</span>
                <h1>Nous contacter</h1>
                <div class="bouton">
                    <a href="" class="btn-un">Nos services</a>
                    <a href="" class="btn-deux">Nos événements</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'partiel/mini.php'?>

<section class="cart">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31775.331830735144!2d-3.9583744!3d5.4296576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc193001adea879%3A0xa297917c4e082243!2sChina%20Mall%20Angr%C3%A9!5e0!3m2!1sfr!2sci!4v1771600610555!5m2!1sfr!2sci" padding = "20px 20px" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class='contact'>
        <div class="container">
            <div class="localisation">
                <h3>localisation</h3>
                <p>lorem</p><br><br>

                <h3>Rue</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. edit. Consequuntur temporibus debitis architecto harum voluptates dolorem aut laboriosam.</p> <br><br>

                <h3>Contact</h3>
                <p>+225: 0789391694 / 0506021254 </p>
            </div>
            <div class="form">
                <h2>Nous contacter</h2>

                <form action="" method="">

                    <div class="input">
                        <input type="text" name="nom" required placeholder='votre nom' >
                        <input type="text" name="prenom" required placeholder='Prenom'>
                        <input type="email" name="email" required placeholder='votre mail'>
                    </div>
                    
                    <textarea name="message" required placeholder="votre message"  rows="8" cols="50"></textarea> <br><br>

                    <button type="submit" name="envoyer">Envoyer</button>

                </form>
            </div>
        </div>
</section>


<?php
    include 'partiel/footer.php';
?>