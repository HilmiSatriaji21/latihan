<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
    include '../database.php';
    $biodata = new Biodata();
    foreach ($biodata->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $agama = $data['agama'];
        $tgl_lahir = $data['tgl_lahir'];
        $umur = $data['umur'];
    }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
          <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                 <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin </th> 
                    <td><input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" checked readonly>Laki-laki
                        <input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" readonly> Perempuan
                    </td>
                </tr>
                </select>
                </tr>
                    </td>
                    <tr>
                        <th>Agama </th>
                        <td><select name="agama" readonly>
                        <option value="pilih">Pilih</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                    </select></tr></td>
                <tr>
                <tr>
                    <th>Tgl Lahir</th>
                    <td><input type="date" name="tgl" value="<?php echo $tgl_lahir; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td><input type="number" name="umur" value="<?php echo $umur; ?>" readonly></td>
                </tr>
        </table>
    </fieldset>
</body>