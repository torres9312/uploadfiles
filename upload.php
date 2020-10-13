<?php


$num_pages = count($_FILES['fileUpload']['name']);


if( $num_pages >= 5 ){

        $foldername = $_POST['folder'];

        mkdir($foldername);
        
        $target_dir = $foldername.'/';
        
      if( isset($_FILES['fileUpload']['name'])) {
            
            $total_files = count($_FILES['fileUpload']['name']);
          
            $target = $target_dir . basename('1.jpg');
            $tmp  = $_FILES['fileUpload']['tmp_name'][0];
            move_uploaded_file($tmp, $target);

            copy('blank.jpg', $target_dir.'2.jpg');

            for($i = 1; $i < $total_files; $i++) {
                
                if(isset($_FILES['fileUpload']['name'][$i]) && $_FILES['fileUpload']['size'][$i] > 0) {

                    if($total_files == $i+1){
                      copy('blank.jpg', $target_dir.($i+2).'.jpg');
                      $target = $target_dir . basename(($i+3).'.jpg');
                      $tmp  = $_FILES['fileUpload']['tmp_name'][$i];
                      move_uploaded_file($tmp, $target);
                    }else{ 
                      $target = $target_dir . basename(($i+2).'.jpg');
                      $tmp  = $_FILES['fileUpload']['tmp_name'][$i];
                      move_uploaded_file($tmp, $target);
                    } 


                }
                
          } 

      }
      echo "<h2>Directorio creado con exito</h2>";  
}else{
  echo "<h2>Debe subir al menos 5 archivos</h2>".phpinfo();
}





?>