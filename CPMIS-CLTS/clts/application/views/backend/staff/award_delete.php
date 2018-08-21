<?php 

$sel_pic=mysql_fetch_assoc(mysql_query("select pic_file from pictures WHERE pic_id='$id'"));
$file_name=$sel_pic['pic_file'] ;
mysql_query("DELETE from pictures WHERE pic_id='$id'");


// $file=$picture_list[$id]->pic_file;
//$file1=$picture_list[0]->pic_file;
 unlink("assets/uploads/".$file_name);


header('Location: ' . base_url() . '/index.php?/award'); 
?>