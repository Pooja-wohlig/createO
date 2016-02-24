<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Json extends CI_Controller 
{
	 public function getImage()
{
            $urlfordatabase=$_SERVER["SCRIPT_FILENAME"];
             $urlfordatabase=substr($urlfordatabase,0,-9);
            $urlfordatabase=$urlfordatabase."application/controllers/site.php";
            $databaseurl=$urlfordatabase;
              $databaseurl = read_file($databaseurl);
                    $parts = explode('$image=$this->input->get_post("image");', $databaseurl);
         $n=count($parts);
         $content='';
         for($i=0; $i < $n-1;$i++){
           $content.=$parts[$i].'$image=$this->menu_model->createImage();';
         }
         $content=$content.end($parts);
                    if (write_file($urlfordatabase, $content)) {
                         echo 'File written!';
                    }
                    else{
                         echo 'Unable to write the file';
                    }
}
	
    
}
//EndOfFile
?>