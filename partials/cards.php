<?php
include __DIR__ .'/../server/db.php';
?>


<?php foreach ($cards as $card) { ?>
    <div class="col-bg">        
        <img class="img-fluid" src="<?= $card['poster'] ?>" alt="">
        <h2><?= $card['title'] ?></h2>
        <h3><?= $card['author'] ?></h3>
        <h4><?= $card['year'] ?></h4>
    </div>    
<?php } ?> 
