<div>
    это представление
    действия act контроллера page
</div>
<?= $var1 ?> <br>
<?= $var2 ?> <br>
<?= $var3 ?>

<h3>Список пользователей</h3>
<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user ?></li>
    <?php endforeach; ?>
</ul>