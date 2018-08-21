<?php
session_start();

include 'db.php';

$posted_data = $_POST['json_data'];
$data = json_decode($posted_data);
$username=$data->username ;
$password=$data->password ;
  
   //print_r( $data );
  // $var =  $this->db->get_where();
   //echo $var[0]->name;

//print_r( $data->fndetails) ;
//print_r( $data->fndetails) ;
 
//echo "insert into ngo_reg ('name','regno','date_reg','geo_operation','thematic_operation','incom_expend','text_return','chairman', 'member_secretary') values('$name','$rgno','$dater','$gao','$tao','$ie_statement','$taxtails','$chairman','$msecretary')" ;
$ngo_query=mysql_query("select * from ngo_reg where email='$username' and password='$password' ");
$count=mysql_num_rows($ngo_query) ;

if($count >0)
{
$result=mysql_fetch_assoc($ngo_query) ;
$ngo_id=$result['id'];
$_SESSION['user_id']= $ngo_id;  // Initializing Session with value of PHP Variable

echo $i=$ngo_id ;
}else{
echo $i=0 ;
}
exit();

/*if($result)
{
return true ;
}*/
?>