<?php


ini_set('max_file_uploads','5000');
$foldername = $_POST['folder'];

mkdir($foldername);

$target_dir = $foldername.'/';


$path = "breviario2/";
$num_files = count($_FILES["fileUpload"]["size"]);



rename($path.$_FILES["fileUpload"]["name"][0], $target_dir.'1.jpg');
copy('blank.jpg', $target_dir.'2.jpg');

for($i =1; $i < $num_files ; $i ++){

        if($num_files == $i+1){
            copy('blank.jpg', $target_dir.($i+2).'.jpg');
            rename($path.$_FILES["fileUpload"]["name"][$i], $target_dir.($i+3).'.jpg');
                
        }else{
            rename($path.$_FILES["fileUpload"]["name"][$i], $target_dir.($i+2).'.jpg');
        }
}







?>