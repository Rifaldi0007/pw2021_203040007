<?php 
   $anime = [
        [
            "nama"=>"Jujutsu kaisen",
            "deskripsi"=>"DVD NEW",
            "detailSpek"=>"NEW - Bluray",
            "Harga"=>200000,
            "Stok barang"=>78,
            "foto"=>"jujutsu.png"
        ],    
   ];
   function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Detail Spek</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($anime as $dagang => $anime) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $anime["nama"]; ?></td>
                    <td><?= $anime["deskripsi"]; ?></td>
                    <td><?= $anime["detailSpek"]; ?></td>
                    <td><?= rupiahIDR($anime["Harga"]) ?></td>
                    <td><?= $anime["Stok barang"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $anime["foto"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>