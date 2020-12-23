        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
  <a class="btn btn-success" data-toggle="modal" data-target='#cetak'><i class="fa fa-print"></i>Cetak Material </a>
  <div class="modal fade" id= "cetak"role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button"class "close" data-dismiss="modal">&times; Close</button>
                <div class="modal-body">
                    <form action="" method="Post" target="_blank" align="center">
                      
                        <div class="label-group">
                          <label>Dari Code :</label>
                          <Input type="text" name="tgl_awal" class="class-control"></Input>
                        </div>
                        <br></br>
                          <div class="label-group">
                            <label>Sampai Code  : </label>
                            <Input type="text" name="tgl_akhir" class="class-control"></Input>
                          </div>
                          <br></br>
                          <div class="label-group">
                            <Input type="submit" name="cetak" class="btn btn-primary btn-sm" value="cetak"></Input>
                          </div>
                    </form>
                    <?php 
if(isset($_GET['pencarian'])){
	$tanggal_awal=$_POST['tgl_awal'];
  $tanggal_akhir=$_POST['tgl_akhir'];
	
}
?>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>