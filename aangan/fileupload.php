<?php
function uploadProfileImage(){
    if($_FILES["roomimg"]["error"] == 0)         
    {
    
        $allowed_type=array("jpg","jpeg","png");
        $name=$_FILES["roomimg"]["name"];
        $a=explode(".",$name);
        $ext=end($a);
                if(in_array($ext,$allowed_type))
                            {
                            $tmp =  $_FILES["roomimg"]["tmp_name"];
                            echo $tmp;
    
    
                            //C:\xampp\htdocs\php\uploadfolder
    
                            $final_path  =  $_SERVER["DOCUMENT_ROOT"]."/aangan/Images/".$_FILES["roomimg"]["name"];
    
    
                        // echo $final_path;
    
                        move_uploaded_file($tmp,$final_path);
    
                        $img_path= "Images/".$_FILES["roomimg"]["name"];
                        echo "File Uploaded";
                        return $img_path;
                         
                            }
                            else{
                                echo "wrong file type";
    
                            }
                 }
    else{
        echo "Error file";
    }
    
}
?>