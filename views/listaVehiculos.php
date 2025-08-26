<div class="vehiculos">
    <?php
    if (isset($_GET['ok'])) {
        include 'modules/cartel.php';
    }
    for ($i = 0; $i < 10; $i++) {
        include 'modules/card.php';
    }
    ?>
</div>