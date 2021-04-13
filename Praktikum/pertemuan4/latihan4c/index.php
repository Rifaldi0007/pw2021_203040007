<?php
    //menghubungkan dengan file pp lainnya
    require 'php/function.php';

    //melakukkan query
    $anime = query("SELECT * FROM anime")
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Daftar Anime</title>
</head>

<body>
    <div class="container">
        <?php foreach ($anime as $anm) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $anm['id'] ?>">
                <?= $anm['nama'] ?>
            </a>
        </p>
        <?php endforeach; ?>
    </div>
</body>

</html>