<?php
require_once __DIR__ . '/vendor/autoload.php';
include'koneksi.php';
$mpdf = new \Mpdf\Mpdf();
$data ='<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br align="left">PT KANSAI PRAKARSA COATINGS</br>
<br align="left">Unit Resin</br> 

<h2 align ="center">Daftar User </h2>

    <table Border="1" align="center">
        <tr>
            <th>No</th>
            <th>ID Karyawan</th>
            <th>Nama</th>
            <th>Tanggal Masuk</th>
            <th>Email</th>
            <th>Departement</th>
            </tr>';
            $sql =mysqli_query($conn, "SELECT * from tb_user");
            $no = 1;
            while($row = mysqli_fetch_array($sql)){
                $data .='<tr>
                            <td>'.$no++.'</td>
                            <td>'.$row['Id_karyawan'] .'</td>
                            <td>'.$row['Nama'].'</td>
                            <td>'.$row['date_of_entry'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['departement'].'</td>
                </tr>';
                        }
    $data .='
                        </table>
</body>
</html>';
$mpdf->WriteHTML($data);
$mpdf->Output();
?>
