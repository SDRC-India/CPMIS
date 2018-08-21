<?php
header('Access-Control-Allow-Origin:*');

//$file_path=$_POST['fileName'];
 $path="/var/www/html/CPMISBeta/fragments/download/cpmisinfo.pdf";
  download_file($path);
  
function download_file($path) {
    if (file_exists($path) && is_file($path)) {
        // file exist
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($path));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        set_time_limit(0);
        @readfile($path);//"@" is an error control operator to suppress errors
    } else {
        // file doesn't exist
        die('Error: The file ' . basename($path) . ' does not exist!');
    }
}








?>