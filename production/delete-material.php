<?PHP
include("koneksi.php");

$data = $_GET["code_item"];
if( isset($_GET["code_item"]) ){
    $sql = ("DELETE FROM tb_material WHERE code_item =$data");
    $query = mysqli_query($conn, $sql);
    if( $query ){
        header('Location: daftarmaterial.php');
    } else {
         mysqli_error($conn);
        die("gagal menghapus...");
    }
} 
 
?>