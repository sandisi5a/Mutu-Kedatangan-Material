<?php
            $iodine_value   = $_GET['iodine_value1'];
            $stqrl      ="SELECT * from tb_material ";
            $sql        = mysqli_query($conn,$stqrl);   
            while($d = mysqli_fetch_array($sql)){
                if (iodine_value == iodine_test){ 
                echo "itu sama cong";
            }
            }
                
                
            
            
            
            ?>