<?php
include 'db.php';
$posted_data = $_POST['json_data'];


//print_r($posted_data);
//print_r($_FILES);
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
$createdDate = date("Y-m-d");

$nof_member=count($board_member) ;  
//find number of trstees	


    if ( 0 < $_FILES['file']['error'] ) {
        
    }
    else {
	if($_FILES["file"]["name"]!=""){
		$newfilename = rand(1,99999) .$_FILES["file"]["name"];
		move_uploaded_file($_FILES["file"]["tmp_name"], "clts/uploads/ie_statement/" . $newfilename);
        //move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
		$ie_statement="uploads/ie_statement/" . $newfilename ;
		}else
		{
		$ie_statement="";
		}
    }
	
	if ( 0 < $_FILES['file1']['error'] ) {
        echo 'Error: ' . $_FILES['file1']['error'] . '<br>';
    }
    else {
		if($_FILES["file"]["name"]!=""){
	$newfilename1 = rand(1,99999) .$_FILES["file1"]["name"];
	move_uploaded_file($_FILES["file1"]["tmp_name"], "clts/uploads/tax_statement/" . $newfilename1);
        //move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
	$tax_statement="uploads/tax_statement/" . $newfilename1 ;
	}else
	{
	$tax_statement="";
	}

    }


$trstees_name=$data->trstees ;
$nofstees_name=count($trstees_name) ;    
$result=mysql_query("insert into ngo_reg (name,regno,date_reg,geo_operation,thematic_operation,incom_expend,text_return,chairman, member_secretary,email,contact,created_date) values('$name','$rgno','$newDate','$gao','$tao','$ie_statement','$tax_statement','$chairman','$msecretary','$email','$contact','$createdDate')");
$last_id=mysql_insert_id() ;

	if($last_id)
	{
		for($i=0;$i<$nof_member;$i++)
		{
		$bordname=$board_member[$i];
		if($bordname!=""){
			$board_result=mysql_query("insert into board_trust_name (name,reg_id,type) values('$bordname','$last_id','1')");
			}
		}
		for($j=0;$j<$nofstees_name;$j++)
		{
		$trsteesname=$trstees_name[$j];
			if($trsteesname!=""){
			$trust_result=mysql_query("insert into board_trust_name (name,reg_id,type) values('$trsteesname','$last_id','2')");
				}
		}
			echo $i=2 ;
	}
	else
	{
	echo $i=1 ;
	}
//echo "-".$i."<br>"  ;
/*if($result)
{
return true ;
}*/
?>
