<table>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Категория</th>
    </tr>
    <?php foreach ($data as $key => $product) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['count'] ?></td>
            <td><?= $product['description'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>