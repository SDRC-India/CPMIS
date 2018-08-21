<?php
include 'db.php';
$posted_data = $_POST['json_data'];
$data = json_decode($posted_data);
$name=$data->name ;
$rgno=$data->rgno ;
$dater=$data->dater ;
$gao=$data->gao ;
$tao=$data->tao ;
$chairman=$data->chairman ;
$msecretary=$data->msecretary ;
//$newDate = date("Y-m-d", strtotime($dater));
$newDate = date("Y-m-d", strtotime($dater));
$board_member=$data->fndetails ;
$email=$data->email ;
$contact=$data->contact ;
$nof_member=count($board_member) ;  
//find number of trstees	
$trstees_name=$data->trstees ;
$nofstees_name=count($trstees_name) ;
$updatedDate = date("Y-m-d");
 
$sessionid=$data->sessionid ;

if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
	$newfilename = rand(1,99999) .$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $newfilename);
        //move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
		$ie_statement="uploads/" . $newfilename ;
    }
	
	if ( 0 < $_FILES['file1']['error'] ) {
        echo 'Error: ' . $_FILES['file1']['error'] . '<br>';
    }
    else {
	$newfilename1 = rand(1,99999) .$_FILES["file1"]["name"];
	move_uploaded_file($_FILES["file1"]["tmp_name"], "uploads/tax_paid" . $newfilename1);
        //move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
	$tax_statement="uploads/tax_paid" . $newfilename ;

    }

//echo "update ngo_reg set (name,regno,date_reg,geo_operation,thematic_operation,incom_expend,text_return,chairman, member_secretary,email,contact) values('$name','$rgno','$newDate','$gao','$tao','$ie_statement','$taxtails','$chairman','$msecretary','$email','$contact') where id='$session_id'" ;   
$result=mysql_query("update ngo_reg set  name='$name', regno='$rgno', date_reg='$newDate', geo_operation='$gao', thematic_operation='$tao', incom_expend='$ie_statement', text_return='$tax_statement', chairman='$chairman', member_secretary='$msecretary', email='$email', contact='$contact',updated_date='$updatedDate' where id='$sessionid'");

$deletemember=mysql_query("delete from board_trust_name where reg_id='$sessionid' ") ;
	
	
		for($i=0;$i<$nof_member;$i++)
		{
		$bordname=$board_member[$i];
		if($bordname!=""){
		$board_result=mysql_query("insert into board_trust_name (name,reg_id,type) values('$bordname','$sessionid','1')");
				}
		}
		for($j=0;$j<$nofstees_name;$j++)
		{
		$trsteesname=$trstees_name[$j];
		if($trsteesname!=""){
		$trust_result=mysql_query("insert into board_trust_name (name,reg_id,type) values('$trsteesname','$sessionid','2')");
				}
		}
			echo $i=3 ;



/*if($result)
{
return true ;
}*/
?>