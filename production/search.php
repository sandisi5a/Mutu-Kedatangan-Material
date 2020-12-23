<?php
include "koneksi.php"; // Load file koneksi.php
$nama_perusahaan = $_POST['nama_perusahaan']; // Ambil data NIS yang dikirim lewat AJAX
$query = mysqli_query($GLOBALS["___mysqli_ston"],  "SELECT * FROM tb_supllier WHERE supplier='".$nama_perusahaan."'"); // Tampilkan data siswa dengan NIS tersebut
$row = mysqli_num_rows($query); // Hitung ada berapa data dari hasil eksekusi $query
if($row > 0){ // Jika data lebih dari 0
  $data = mysqli_fetch_array($query); // ambil data siswa tersebut
  
  // BUat sebuah array
  $callback = array(
    'status' => 'success', // Set array status dengan success
    'nama' => $data['supplier'], // Set array nama dengan isi kolom nama pada tabel siswa
    
  );
}else{
  $callback = array('status' => 'failed'); // set array status dengan failed
}
echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>