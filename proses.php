<?php

  // Menangkap isi variabel dari file yang telah kita isi pada form.php
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $jurusan = $_POST['jurusan'];
  $alamat = $_POST['alamat'];
  $departement = $_POST['departement'];
  $hobi = $_POST['hobi'];
  $kelebihan = $_POST['kelebihan'];
  $alasan = $_POST['alasan'];
  

  // Format data yang akandiparsing
  $data = "\n $nama|$nim|$jurusan|$alamat|$departement|$hobi|$kelebihan|$alasan";

  // Buka file mhs.txt, kemudian tuliskan isi variabel di atas kedalam mhs.txt
  $fh = fopen("mhs.txt", "a");
  fwrite($fh, $data );

  // Tutup file data.txt
  fclose($fh);

  // Keterangan bila data berhasil di input
  header("Location:responsi.php");

?>