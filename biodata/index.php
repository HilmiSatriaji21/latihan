<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>Data Diri
    <fieldset>
        <legend>Data Diri</legend>
        <a href="create.php">Tambah Data Diri</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Tgl Lahir</th>
                <th>Umur</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
            include '../database.php';
            $biodata = new Biodata();
            $no = 1;
            // var_dump($siswa->index());
            foreach ($biodata->index() as $data) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['umur']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </center>
    </fieldset>
</body>

</html>