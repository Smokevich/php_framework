<h3><?= $h3; ?></h3>
<div id="content">
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>ссылка</th>
        </tr>
        <?php foreach ($data[0] as $page) : ?>
            <tr>
                <td><?= $page['id']; ?></td>
                <td><?= $page['title']; ?></td>
                <td><a href="/page/<?= $page['id']; ?>/">ссылка на страницу</td>
            </tr>
        <?php endforeach; ?>
    </table>