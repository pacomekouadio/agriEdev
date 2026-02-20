<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (isset($title)) {
                echo $title;
            } else{
                echo 'page';
            }
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="header">
        <div class="header-top">
            <div class="logo">
                <a href="index.php">Logo</a>
            </div>
            <nav class="nav">
                <a href="index.php"   <?php if(isset($title) && $title === 'home') echo "class = 'active'"; ?>>Accueil</a>
                <a href="about.php"   <?php if(isset($title) && $title === 'About') echo "class = 'active'"; ?> >À propos</a>
                <a href="service.php" <?php if(isset($title) && $title === 'Service') echo "class = 'active'"; ?> >Services</a>
                <a href="event.php"   <?php if(isset($title) && $title === 'Event') echo "class = 'active'"; ?> >Event</a>
                <a href="contact.php" <?php if(isset($title) && $title === 'Contact') echo "class = 'active'"; ?> >Contact</a>
            </nav>
        </div>
    </header>