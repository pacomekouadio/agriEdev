<section class = 'mini' >
<a href="index.php">Home</a> /

<a href="<?php echo isset($link) ? htmlspecialchars($link) : '#'; ?>">
    <?php echo isset($title) ? htmlspecialchars($title) : 'Page'; ?>
</a>
</section>