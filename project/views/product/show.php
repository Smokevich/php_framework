<h1>Продукт "<?= $data['name'] ?>"</h1>
<p>
    Цена: <?= $data['price'] ?> руб, количество: <?= $data['count'] ?>
</p>
<p>
    Стоимость (цена * количество): <?= $data['count'] * $data['price'] ?>$
</p>

<?php
?>