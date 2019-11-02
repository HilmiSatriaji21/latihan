<?php
class Biodata extends Database
{
   // Menampilkan Semua Data
   public function index()
   {

      $datasiswa = mysqli_query($this->koneksi, "select * from biodata");
      // var_dump($datasiswa);
      return $datasiswa;
   }

   // Menambah Data
   public function create($nama, $alamat, $jenis_kelamin, $agama, $tgl_lahir, $umur)
   {
      mysqli_query(
         $this->koneksi,
         "insert into biodata values(null, '$nama', '$alamat', '$jenis_kelamin', '$agama', '$tgl_lahir', '$umur')"
      );
   }
   // Menampilkan Data Berdasarkan ID
   public function show($id)
   {
      $datasiswa = mysqli_query(
         $this->koneksi,
         "select * from biodata where id='$id'"
      );
      return $datasiswa;
   }

   // Menampilkan data berdasarkan id
   public function edit($id)
   {
      $datasiswa = mysqli_query(
         $this->koneksi,
         "select * from biodata where id='$id'"
      );
      return $datasiswa;
   }
   // mengupdate data berdasarkan id
   public function update($id,$nama, $alamat, $jenis_kelamin, $agama, $tgl_lahir, $umur)
   {
      mysqli_query(
         $this->koneksi,
         "update biodata set nama='$nama', alamat='$alamat', 
         jenis_kelamin='$jenis_kelamin', agama='$agama', tgl_lahir='$tgl_lahir',umur='$umur' where id='$id'"
      );
   }

   // menghapus data berdasarkan id
   public function delete($id)
   {
      mysqli_query($this->koneksi, "delete from biodata where id='$id'");
   }
}
