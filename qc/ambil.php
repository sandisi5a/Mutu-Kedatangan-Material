<?php 
	include'koneksi.php';
    $no = 1;
    $d ="SELECT * FROM tb_kedatangan_detail 
            inner join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item
            inner join tb_kedatangan on tb_kedatangan_detail.id_kedatangan = tb_kedatangan.id_kedatangan
            inner join tb_supllier on tb_kedatangan.code_supplier = tb_supllier.code_supplier";
    
    $data = mysqli_query($conn, $d)or die("Query Salah");
    $strql = mysqli_fetch_array($data);
	?>	
<td style="width: 125px" align= "center">
										<a href="formulir1.php?id_kedatangan_detail=<?php echo $strql['id_kedatangan_detail'] ?>" >klik </a>
										
								</td>
                              