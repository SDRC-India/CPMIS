
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Dashboard_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  public function get_dashboardData($ses_ids)
  {

    $role = $this->db->get_where('staff',array('staff_id'=>$ses_ids))->result_array();

          foreach($role as $rolep):

          $roles_id=$rolep['account_role_id'];

          $dist_id=$rolep['district_id'];

          $state_id=$rolep['state_id'];

          $stat_id=$rolep['state_id'];

          endforeach;
    //child rescue
$cnt = $this->db->select('*')->get_where('child_basic_detail', array('district_id'=>$dist_id))->result_array();
        $crdt=0;
        $lstdt=0;
        $child_rescue=0;
        $per_rescue=0;
        foreach ($cnt as $row):
                $mnt=date('m',strtotime($row['date_of_creation']));
                $mnt1=date('m');
                 //to get the current month rescued childrens
                if($mnt==$mnt1) {
                  $crdt=$crdt+1;
                }
                //to get the last month rescued childrens
                $lnt1=date('m',strtotime('-1 months'));
                if($mnt==$lnt1) {
                  $lstdt= $lstdt +1;
                }
                //to get the no of total childs
                $child_rescue=$child_rescue+1;
        endforeach;

//bar chart value for transfered to
$sql_trs="Select * from child_basic_detail where district_id='".$dist_id."' and child_id in(select child_id from final_order where transfer_to!='" .$dist_id . "') ";
  $cnt=$this->db->query($sql_trs)->result_array();
        $trs_to=0;
        $trs_to_dt=0;
        $trs_to_val=0;
        $per_transfered_to=0;
    foreach ($cnt as $row):
        $mnt=date('m',strtotime($row['date_of_creation']));
        $mnt1=date('m');
        $lnt1=date('m',strtotime('-1 months'));
         //to get the current month transfered to
        if($mnt==$mnt1) {
          $trs_to=$trs_to+1;
        }
         //to get the last month transfered to
        if($mnt==$lnt1) {
          $trs_to_dt=$trs_to_dt+1;
        }
         //to get the total transfered to
        $trs_to_val=$trs_to_val+1;
    endforeach;


//bar chart value for transfered from
  $sql_trsfr="Select final_order.child_id,child_basic_detail.date_of_creation as date_of_creation from final_order join child_basic_detail on(final_order.child_id=child_basic_detail.child_id)  where transfer_to='" .$dist_id . "'";
    $cnt3=$this->db->query($sql_trsfr)->result_array();
        $trs_from=0;
        $trs_from_dt=0;
        $trs_from_val=0;
        $per_transfer_from=0;
    foreach ($cnt3 as $row):
          $mnt=date('m',strtotime($row['date_of_creation']));
          $mnt1=date('m');
          $lnt1=date('m',strtotime('-1 months'));

          //to get the current month transfered from
          if($mnt==$mnt1) {
            $trs_from=$trs_from+1;
          }
          //to get the last month transfered to
          if($mnt==$lnt1) {
            $trs_from_dt=$trs_from_dt+1;
          }
          //to get the all transfered from
          $trs_from_val=$trs_from_val+1;
    endforeach;

//this is requird only for child investigation ongoing
    /*$cnt2 = $this->db->select('*')->get_where('child_basic_detail', array('pstatus'=>'N','district_id'=>$dist_id))->result_array();/not required*/
    $sql_que="Select * from child_basic_detail where (district_id='".$dist_id."' and pstatus='N' ) or child_id in(select child_id from child_after_rescued where dist='".$dist_id."'and child_id in(select child_id from child_basic_detail where pstatus='N'))";
      $cnt2=$this->db->query($sql_que)->result_array();
            $rcrdt=0;
            $rlstdt=0;
            $rltsp=0;
        foreach ($cnt2 as $row4):
        $rmnt=date('m',strtotime($row4['date_of_creation']));
        $rmnt1=date('m');
        $klnt1=date('m',strtotime('-1 months'));
        if($rmnt==$rmnt1) {
          $rcrdt=$rcrdt+1;
        }
        if($rmnt==$klnt1) {
          $rlstdt=$rlstdt+1;
        }
        $rltsp=$rltsp+1;
        endforeach;
//investigation on going
$sql_q="Select * from child_basic_detail where (district_id='".$dist_id."' and pstatus='N'  and child_id in(select child_id from final_order where dist='' or dist IS NULL)) or  (pstatus='N' and child_id in(select child_id from final_order where transfer_to='" .$dist_id . "'))";
  $cnt1=$this->db->query($sql_q)->result_array();
        $scrdt=0;
        $slstdt=0;
        $totsdd=0;
        $per_inves=0;
    foreach ($cnt1 as $row2):
        $smnt=date('m',strtotime($row2['date_of_creation']));
        $smnt1=date('m');
        $alnt1=date('m',strtotime('-1 months'));
          //to get the current month investigation on going
        if($smnt==$smnt1) {
          $scrdt=$scrdt+1;
        }
          //to get the last month investigation on going
        if($smnt==$alnt1) {
          $slstdt=$slstdt+1;
        }
          //to get the all investigation on going
        $totsdd=$totsdd+1;
    endforeach;



//$cnt3= $this->db->select('*')->get_where('child_basic_detail', array('is_card_print'=>1,'district_id'=>$dist_id))->result_array();*/
//entitle card details
$sql_que_card="Select * from child_basic_detail where (district_id='".$dist_id."' and is_card_print=1 and pstatus='Y' and child_id in(select child_id from final_order where dist='' or dist IS NULL) ) or (child_id in(select child_id from final_order where dist='" .$dist_id . "') and child_id in(select child_id from child_basic_detail where is_card_print=1 and pstatus='Y'))";
$cnt3=$this->db->query($sql_que_card)->result_array();

        $entitled_list=0;
        $entitled_list_dt=0;
        $entitled_list_val=0;
        $per_card_list=0;
    foreach ($cnt3 as $row6):
      $ftmnt=date('m',strtotime($row6['date_of_creation']));
      $ftmnt1=date('m');
      //to get current month entitlement card list
      if($ftmnt==$ftmnt1) {
        $entitled_list=$entitled_list+1;
      }
      //to get current month entitlement card list
      $plnt1=date('m',strtotime('-1 months'));
      if($ftmnt==$plnt1) {
        $entitled_list_dt=$entitled_list_dt+1;
      }
        //to get current month entitlement card list
        $entitled_list_val=$entitled_list_val+1;
    endforeach;
    //to get percentage of child  entitlement card list  current to last month
    if($entitled_list_dt==0) {$per_card_list=$entitled_list*100;}
    else {$per_card_list=round((($entitled_list-$entitled_list_dt)/$entitled_list_dt)*100,1);}


    //trend chart table values
      //to get percentage of child rescued from current to last month
      if($lstdt==0) {$per_rescue=$crdt*100;}
      else {$per_rescue=round((($crdt-$lstdt)/$lstdt)*100,1);	}
      //to get percentage of child transfered from current to last month
      if($lstdt==0) {$per_transfered_to=$trs_to*100;}
      else {$per_transfered_to=round((($trs_to-$trs_to_dt)/$trs_to_dt)*100,1);	}
      //to get percentage of child investigation on going   current to last month
      if($slstdt==0) {$per_inves=$scrdt*100;}
      else {$per_inves=round((($scrdt-$rlstdt)/$rlstdt)*100,1);}//$rlstdt form above queru result
      //to get percentage of child transfered to current to last month
      if($trs_from_dt==0) {	$per_transfer_from=$trs_from_val*100; }
      else { $per_transfer_from=round((($trs_from-$trs_from_dt)/$trs_from_dt)*100,1);	}
    $child_rescued_trend=array($crdt,$lstdt,$per_rescue);
    $child_trs_to_trend=array($trs_to,  $trs_to_dt,$per_transfered_to);
    $child_trs_from_trend=array($trs_from,$trs_from_dt,$per_transfer_from);
    $child_inves_trend=array($scrdt,$slstdt,$per_inves);
    $child_entitled_list_trend=array($entitled_list,$entitled_list_dt,$per_card_list);

  $retVal=array("child_rescue"=> $child_rescue, "trs_to_val"=>  $trs_to_val , "trs_from_val"=> $trs_from_val , "totsdd"=>  $totsdd ,"entitled_list_val"=> $entitled_list_val, 'child_rescued_trend'=>  $child_rescued_trend,'child_trs_to_trend'=>  $child_trs_to_trend,'child_trs_from_trend'=>  $child_trs_from_trend,'child_inves_trend'=>$child_inves_trend, 'child_entitled_list_trend'=>  $child_entitled_list_trend );
    return $retVal;



      }
      
      // Get dashboard for LC
      public function get_dashboardData_LC($ses_ids)
      {      	
      	$role = $this->db->get_where('staff',array('staff_id'=>$ses_ids))->result_array();
      	
      	foreach($role as $rolep):     	
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$state_id=$rolep['state_id'];      	
      	$stat_id=$rolep['state_id'];
      	
      	endforeach;
      	//child rescue
      	$cnt = $this->db->select('*')->get_where('child_basic_detail', array('state_id'=>'IND010'))->result_array();
      	$crdt=0;
      	$lstdt=0;
      	$child_rescue=0;
      	$per_rescue=0;
      	foreach ($cnt as $row):
      	$mnt=date('m',strtotime($row['date_of_creation']));
      	$mnt1=date('m');
      	//to get the current month rescued childrens
      	if($mnt==$mnt1) {
      		$crdt=$crdt+1;
      	}
      	//to get the last month rescued childrens
      	$lnt1=date('m',strtotime('-1 months'));
      	if($mnt==$lnt1) {
      		$lstdt= $lstdt +1;
      	}
      	//to get the no of total childs
      	$child_rescue=$child_rescue+1;
      	endforeach;
      	
      	//bar chart value for transfered to
      	$sql_trs="Select * from child_basic_detail where state_id='IND010' and child_id in(select child_id from final_order where transfer_to!='" .$dist_id . "') ";
      	$cnt=$this->db->query($sql_trs)->result_array();
      	$trs_to=0;
      	$trs_to_dt=0;
      	$trs_to_val=0;
      	$per_transfered_to=0;
      	foreach ($cnt as $row):
      	$mnt=date('m',strtotime($row['date_of_creation']));
      	$mnt1=date('m');
      	$lnt1=date('m',strtotime('-1 months'));
      	//to get the current month transfered to
      	if($mnt==$mnt1) {
      		$trs_to=$trs_to+1;
      	}
      	//to get the last month transfered to
      	if($mnt==$lnt1) {
      		$trs_to_dt=$trs_to_dt+1;
      	}
      	//to get the total transfered to
      	$trs_to_val=$trs_to_val+1;
      	endforeach;
      	
      	
      	//bar chart value for transfered from
      	$sql_trsfr="Select final_order.child_id,child_basic_detail.date_of_creation as date_of_creation from final_order join child_basic_detail on(final_order.child_id=child_basic_detail.child_id)  where type_order='Cases transferred to other Dist/State/Country'";
      	$cnt3=$this->db->query($sql_trsfr)->result_array();
      	$trs_from=0;
      	$trs_from_dt=0;
      	$trs_from_val=0;
      	$per_transfer_from=0;
      	foreach ($cnt3 as $row):
      	$mnt=date('m',strtotime($row['date_of_creation']));
      	$mnt1=date('m');
      	$lnt1=date('m',strtotime('-1 months'));
      	
      	//to get the current month transfered from
      	if($mnt==$mnt1) {
      		$trs_from=$trs_from+1;
      	}
      	//to get the last month transfered to
      	if($mnt==$lnt1) {
      		$trs_from_dt=$trs_from_dt+1;
      	}
      	//to get the all transfered from
      	$trs_from_val=$trs_from_val+1;
      	endforeach;
      	
      	//this is requird only for child investigation ongoing
      	/*$cnt2 = $this->db->select('*')->get_where('child_basic_detail', array('pstatus'=>'N','district_id'=>$dist_id))->result_array();/not required*/
      	$sql_que="Select * from child_basic_detail where pstatus='N' ";
      	$cnt2=$this->db->query($sql_que)->result_array();
      	$rcrdt=0;
      	$rlstdt=0;
      	$rltsp=0;
      	foreach ($cnt2 as $row4):
      	$rmnt=date('m',strtotime($row4['date_of_creation']));
      	$rmnt1=date('m');
      	$klnt1=date('m',strtotime('-1 months'));
      	if($rmnt==$rmnt1) {
      		$rcrdt=$rcrdt+1;
      	}
      	if($rmnt==$klnt1) {
      		$rlstdt=$rlstdt+1;
      	}
      	$rltsp=$rltsp+1;
      	endforeach;
      	//investigation on going
      	$sql_q="Select child_basic_detail.id from child_basic_detail left join final_order on child_basic_detail.child_id=final_order.child_id and final_order.final_ordered='No' where pstatus='N'";
      	$cnt1=$this->db->query($sql_q)->result_array();
      	$scrdt=0;
      	$slstdt=0;
      	$totsdd=0;
      	$per_inves=0;
      	foreach ($cnt1 as $row2):
      	$smnt=date('m',strtotime($row2['date_of_creation']));
      	$smnt1=date('m');
      	$alnt1=date('m',strtotime('-1 months'));
      	//to get the current month investigation on going
      	if($smnt==$smnt1) {
      		$scrdt=$scrdt+1;
      	}
      	//to get the last month investigation on going
      	if($smnt==$alnt1) {
      		$slstdt=$slstdt+1;
      	}
      	//to get the all investigation on going
      	$totsdd=$totsdd+1;
      	endforeach;
      	
      	
      	
      	//$cnt3= $this->db->select('*')->get_where('child_basic_detail', array('is_card_print'=>1,'district_id'=>$dist_id))->result_array();*/
      	//entitle card details
      	$sql_que_card="Select child_basic_detail.id from child_basic_detail where is_card_print=1 and pstatus='Y' ";
      	$cnt3=$this->db->query($sql_que_card)->result_array();
      	
      	$entitled_list=0;
      	$entitled_list_dt=0;
      	$entitled_list_val=0;
      	$per_card_list=0;
      	foreach ($cnt3 as $row6):
      	$ftmnt=date('m',strtotime($row6['date_of_creation']));
      	$ftmnt1=date('m');
      	//to get current month entitlement card list
      	if($ftmnt==$ftmnt1) {
      		$entitled_list=$entitled_list+1;
      	}
      	//to get current month entitlement card list
      	$plnt1=date('m',strtotime('-1 months'));
      	if($ftmnt==$plnt1) {
      		$entitled_list_dt=$entitled_list_dt+1;
      	}
      	//to get current month entitlement card list
      	$entitled_list_val=$entitled_list_val+1;
      	endforeach;
      	//to get percentage of child  entitlement card list  current to last month
      	if($entitled_list_dt==0) {$per_card_list=$entitled_list*100;}
      	else {$per_card_list=round((($entitled_list-$entitled_list_dt)/$entitled_list_dt)*100,1);}
      	
      	
      	//trend chart table values
      	//to get percentage of child rescued from current to last month
      	if($lstdt==0) {$per_rescue=$crdt*100;}
      	else {$per_rescue=round((($crdt-$lstdt)/$lstdt)*100,1);	}
      	//to get percentage of child transfered from current to last month
      	if($lstdt==0) {$per_transfered_to=$trs_to*100;}
      	else {$per_transfered_to=round((($trs_to-$trs_to_dt)/$trs_to_dt)*100,1);	}
      	//to get percentage of child investigation on going   current to last month
      	if($slstdt==0) {$per_inves=$scrdt*100;}
      	else {$per_inves=round((($scrdt-$rlstdt)/$rlstdt)*100,1);}//$rlstdt form above queru result
      	//to get percentage of child transfered to current to last month
      	if($trs_from_dt==0) {	$per_transfer_from=$trs_from_val*100; }
      	else { $per_transfer_from=round((($trs_from-$trs_from_dt)/$trs_from_dt)*100,1);	}
      	$child_rescued_trend=array($crdt,$lstdt,$per_rescue);
      	$child_trs_to_trend=array($trs_to,  $trs_to_dt,$per_transfered_to);
      	$child_trs_from_trend=array($trs_from,$trs_from_dt,$per_transfer_from);
      	$child_inves_trend=array($scrdt,$slstdt,$per_inves);
      	$child_entitled_list_trend=array($entitled_list,$entitled_list_dt,$per_card_list);
      	
      	$retVal=array("child_rescue"=> $child_rescue, "trs_to_val"=>  $trs_to_val , "trs_from_val"=> $trs_from_val , "totsdd"=>  $totsdd ,"entitled_list_val"=> $entitled_list_val, 'child_rescued_trend'=>  $child_rescued_trend,'child_trs_to_trend'=>  $child_trs_to_trend,'child_trs_from_trend'=>  $child_trs_from_trend,'child_inves_trend'=>$child_inves_trend, 'child_entitled_list_trend'=>  $child_entitled_list_trend );
      	return $retVal;
      	
      	
      	
      }
      
      //to get the account_role_id
      function get_role_id($role_id)
      {
        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
        return $role;
      }


//To get SCPS DASHBOARD DATA
      public function get_scps_Dashboard($nmid,$dstate_id,$isState)
      {
          //return $nmid.$dstate_id.$isState;
      	//echo $dstate_id;
        //child rescued
   $cnt = $this->db->select('*')->get_where('child_basic_detail', array($nmid=>$dstate_id))->result_array();

      $crdt=0;
      $lstdt=0;
      			foreach ($cnt as $row):
      			$mnt=date('m',strtotime($row['date_of_creation']));
      			$mnt1=date('m');
            $lnt1=date('m',strtotime('-1 months'));
      			if($mnt==$mnt1) {
      				$crdt=$crdt+1;
      			}
            if($mnt==$lnt1) {
      				$lstdt=$lstdt+1;

      			}
          endforeach;
//transfered to
if($isState){
//bar chart value for transfered to
$sql_trs="Select * from child_basic_detail where district_id='".$dstate_id."' and child_id in(select child_id from final_order where transfer_to!='" .$dstate_id . "') ";
	  $cnt=$this->db->query($sql_trs)->result_array();
	/*$cnt = $this->db->select('*')->get_where('child_basic_detail', array('district_id'=>$dist_id))->result_array();*/

					$trs_to=0;
					$trs_to_dt=0;
			foreach ($cnt as $row):
			$mnt=date('m',strtotime($row['date_of_creation']));
			$mnt1=date('m');
      $lnt1=date('m',strtotime('-1 months'));
      if($mnt==$lnt1) {
        $trs_to_dt=$trs_to_dt+1;

      }
			if($mnt==$mnt1) {

				$trs_to=$trs_to+1;

			}

    endforeach;

//end of bar chart value for transfered to

//bar chart value for transfered from
$sql_trsfr="Select child_id from final_order where transfer_to='" .$dstate_id . "'";
	  $cnt=$this->db->query($sql_trsfr)->result_array();

					$trs_from=0;
					$trs_from_dt=0;
					$trs_from_val=0;
			foreach ($cnt as $row2):

			$mnt=date('m',strtotime($row2['date_of_creation']));
			$mnt1=date('m');
			if($mnt==$mnt1) {

				$trs_from = $trs_from+1;

			}
      $lnt1=date('m',strtotime('-1 months'));

      if($mnt==$lnt1) {

        $trs_from_dt=$trs_from_dt+1;

      }

    endforeach;

		//end of bar chart value for transfered from
//transfered from
}
//investigation on going
		//$cnt1 = $this->db->select('*')->get_where('child_basic_detail', array('pstatus'=>'Y',$nmid=>$dstate_id))->result_array();
		if(!$isState) {
		$sql_q="Select * from child_basic_detail where state_id='".$dstate_id."' and pstatus='N'";
		}else{
		$sql_q="Select * from child_basic_detail where (district_id='".$dstate_id."' and pstatus='N'  and child_id in(select child_id from final_order where dist='' or dist IS NULL)) or  (pstatus='N' and child_id in(select child_id from final_order where transfer_to='" .$dstate_id . "'))";
		}
	  $cnt1=$this->db->query($sql_q)->result_array();
					$scrdt=0;
					$slstdt=0;
			foreach ($cnt1 as $row2):
			$smnt=date('m',strtotime($row2['date_of_creation']));

			$smnt1=date('m');
			if($smnt==$smnt1) {
				$scrdt=$scrdt+1;
			}
      $alnt1=date('m',strtotime('-1 months'));
			if($smnt==$alnt1) {
				$slstdt=$slstdt+1;
			}

    endforeach;

$cnt2 = $this->db->select('*')->get_where('child_basic_detail', array('pstatus'=>'N',$nmid=>$dstate_id))->result_array();

          $rcrdt=0;
					$rlstdt=0;
					$rltsp=0;

			foreach ($cnt2 as $row4):
			$rmnt=date('m',strtotime($row4['date_of_creation']));
			$rmnt1=date('m');
			if($rmnt==$rmnt1) {
				$rcrdt=$rcrdt+1;
			}
      $klnt1=date('m',strtotime('-1 months'));

      if($rmnt==$klnt1) {

        $rlstdt=$rlstdt+1;

      }
    endforeach;

//card
if($isState) {
$sql_que_card="Select * from child_basic_detail where ($nmid='".$dstate_id."' and is_card_print=1 and pstatus='Y')";
}else{
$sql_que_card="Select * from child_basic_detail where (district_id='".$dstate_id."' and is_card_print=1 and pstatus='Y' and child_id in(select child_id from final_order where dist='' or dist IS NULL) ) or (child_id in(select child_id from final_order where dist='" .$dstate_id . "') and child_id in(select child_id from child_basic_detail where is_card_print=1 and pstatus='Y'))";
}
 $cnt3=$this->db->query($sql_que_card)->result_array();
 					$entitled_list=0;
					$entitled_list_dt=0;

			foreach ($cnt3 as $row6):
			$ftmnt=date('m',strtotime($row6['date_of_creation']));
			$ftmnt1=date('m');
			if($ftmnt==$ftmnt1) {
				$entitled_list=$entitled_list+1;
			}

			$plnt1=date('m',strtotime('-1 months'));

			if($ftmnt==$plnt1) {

				$entitled_list_dt=$entitled_list_dt+1;

			}
	endforeach;



      //trend chart table values
        //to get percentage of child rescued from current to last month
       if($lstdt==0) {$per_rescue=$crdt*100;}
        else {$per_rescue=round((($crdt-$lstdt)/$lstdt)*100,1);	}
        //to get percentage of child transfered from current to last month
        if($lstdt==0) {$per_transfered_to=$trs_to*100;}
        else {$per_transfered_to=round((($trs_to-$trs_to_dt)/$trs_to_dt)*100,1);	}
        //to get percentage of child investigation on going   current to last month
        if($slstdt==0) {$per_inves=$scrdt*100;}
        else {$per_inves=round((($scrdt-$rlstdt)/$rlstdt)*100,1);}//$rlstdt form above queru result
        //to get percentage of child transfered to current to last month
        if($trs_from==0) {	$per_transfer_from=$trs_from_val*100; }
        else { $per_transfer_from=round((($trs_from_val-$trs_from)/$trs_from)*100,1);	}
        if($entitled_list_dt==0) {$per_card_list=$entitled_list*100;}
        else {$per_card_list=round((($entitled_list-$entitled_list_dt)/$entitled_list_dt)*100,1);}

      $child_rescued_trend=array($crdt,$lstdt,$per_rescue);
      $child_trs_to_trend=array($trs_to,  $trs_to_dt,$per_transfered_to);
      $child_trs_from_trend=array($trs_from,$trs_from_dt,$per_transfer_from);
      $child_inves_trend=array($scrdt,$slstdt,$per_inves);
      $child_entitled_list_trend=array($entitled_list,$entitled_list_dt,$per_card_list);
      $retVal=array('child_rescued_trend'=>  $child_rescued_trend,'child_trs_to_trend'=>  $child_trs_to_trend,'child_trs_from_trend'=>  $child_trs_from_trend,'child_inves_trend'=>$child_inves_trend, 'child_entitled_list_trend'=>  $child_entitled_list_trend );
      return $retVal;


      }

      //get districts
      public function get_districts($state_id)
      {
        return $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
      }
      public function get_area($dstate_id)
      {
       return $this->db->get_where('child_area_detail',array('area_id'=>$dstate_id))->result_array();
      }
      
      public function get_agewise($from,$to,$dist) {
      	//echo $from;
      	//echo $to;
      	$this->load->model('dashboard_model');
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->dashboard_model->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$stat_id=$rolep['state_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	//$from='2014-04-01';
      	//$to='2017-05-26';
      	//echo $roles_id;
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      	{
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      		
      		$child_b10 = $this->db->query("select sum(d1<10 or year<10) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365 as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) <10) or (isdob='No' and year <10)) where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' )Z group by area_name order by area_name")->result_array();
      		
      		$child_b14 = $this->db->query("select sum((d1>=10 and d1<=14)or(year>=10 and year<=14)) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) in(10,11,12,13,14))) or (isdob='No'and year in(10,11,12,13,14))) where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
      		
      		$child_b15 = $this->db->query("select sum((d1>=15) or (year<>''and year is not null and year>=15)) as num_child,area_id from (select y.area_id,(floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) >=15 and isdob='Yes') or (year<>''and year is not null and year >=15 and isdob='No')) where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
      	}
      	else if($roles_id==13 || $roles_id==20 )//DLC
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		
      		$child_b10 = $this->db->query("select sum(d1<10 or year<10) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365 as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) <10) or (isdob='No' and year <10)) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' )Z group by area_name order by area_name")->result_array();
      		
      		$child_b14 = $this->db->query("select sum((d1>=10 and d1<=14)or(year>=10 and year<=14)) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) in(10,11,12,13,14))) or (isdob='No'and year in(10,11,12,13,14))) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
      		$child_b15 = $this->db->query("select sum((d1>=15) or (year<>''and year is not null and year>=15)) as num_child,area_id from (select y.area_id,(floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) >=15 and isdob='Yes') or (year<>''and year is not null and year >=15 and isdob='No')) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
      	}
      	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		
      		$child_b10 = $this->db->query("select sum(d1<10 or year<10) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365 as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) <10) or (isdob='No' and year <10)) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' )Z group by area_name order by area_name")->result_array();
      		
      		$child_b14 = $this->db->query("select sum((d1>=10 and d1<=14)or(year>=10 and year<=14)) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) in(10,11,12,13,14))) or (isdob='No'and year in(10,11,12,13,14))) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
      		$child_b15 = $this->db->query("select sum((d1>=15) or (year<>''and year is not null and year>=15)) as num_child,area_id from (select y.area_id,(floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365) as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and ((floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) >=15 and isdob='Yes') or (year<>''and year is not null and year >=15 and isdob='No')) where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."')Z group by area_name order by area_name")->result_array();
      	}
      	
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		
      		
      		if(sizeof($child_b10)>0)
      		{
      			
      			foreach($child_b10 as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					
      					$cumulative[$i][1]=$row['num_child'];
      					
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_b14)>0)
      		{
      			foreach($child_b14 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][2]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_b15)>0)
      		{
      			foreach($child_b15 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][3]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      				}
      			}
      			
      		}
      		//$cumulative[$i][4]=$child_bnot[$i]['num_child']<>NULL ? $child_bnot[$i]['num_child'] : 0;
      		$cumulative[$i][4]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3];
      		$tot1+=$cumulative[$i][1];
      		$tot2+=$cumulative[$i][2];
      		$tot3+=$cumulative[$i][3];
      		$tot4+=$cumulative[$i][4];
      	}
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		
      		
      		
      	}
      	
      	
      	return ($cumulative);
      	//echo json_encode($cumulative);
      }
      
// added on 17-10-17
//for education part in dashboard
      public function get_education($from,$to,$dist) {
      	$this->load->model('dashboard_model');
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->dashboard_model->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$stat_id=$rolep['state_id'];
      	endforeach;
      	
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      	{
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      		
      		
      		$child_Illiterate = $this->db->query("select sum(education='Illiterate') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='Illiterate'  where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_UP = $this->db->query("select sum(education in('1st','2nd','3rd','4th','5th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('1st','2nd','3rd','4th','5th')  where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_ML = $this->db->query("select sum(education in('6th','7th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('6th','7th') where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_UperP = $this->db->query("select sum(education in('8th','9th','10th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('8th','9th','10th') where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_HS = $this->db->query("select sum(education in('11th','12th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('11th','12th')  where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		//echo "select sum(education='' or education='0') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='' or x.education='0' where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name" ;
      		$child_NS = $this->db->query("select sum(education='' or education='0') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (x.education='' or x.education='0') where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      	}
      	else if($roles_id==13 || $roles_id==20 )
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		$child_Illiterate = $this->db->query("select sum(education='Illiterate') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='Illiterate'  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		$child_UP = $this->db->query("select sum(education in('1st','2nd','3rd','4th','5th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('1st','2nd','3rd','4th','5th')  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_ML = $this->db->query("select sum(education in('6th','7th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('6th','7th') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_UperP = $this->db->query("select sum(education in('8th','9th','10th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('8th','9th','10th') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_HS = $this->db->query("select sum(education in('11th','12th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('11th','12th')  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_NS = $this->db->query("select sum(education='' or education='0') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (x.education='' or x.education='0') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      	}
      	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		$child_Illiterate = $this->db->query("select sum(education='Illiterate') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education='Illiterate'  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		$child_UP = $this->db->query("select sum(education in('1st','2nd','3rd','4th','5th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('1st','2nd','3rd','4th','5th')  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_ML = $this->db->query("select sum(education in('6th','7th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('6th','7th') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')  AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_UperP = $this->db->query("select sum(education in('8th','9th','10th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('8th','9th','10th') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_HS = $this->db->query("select sum(education in('11th','12th')) as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.education in('11th','12th')  where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		$child_NS = $this->db->query("select sum(education='' or education='0') as num_child,area_id  from (select y.area_id, y.area_name,x.education from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (x.education='' or x.education='0') where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      	}
      	
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		$cumulative[$i][5]=0;
      		$cumulative[$i][6]=0;
      		$cumulative[$i][7]=0;
      		
      		if(sizeof($child_Illiterate)>0)
      		{
      			foreach($child_Illiterate as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][1]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_UP)>0)
      		{
      			foreach($child_UP as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][2]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_ML)>0)
      		{
      			foreach($child_ML as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][3]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_UperP)>0)
      		{
      			foreach($child_UperP as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][4]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][4]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_HS)>0)
      		{
      			foreach($child_HS as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][5]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][5]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_NS)>0)
      		{
      			foreach($child_NS as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][6]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][6]=0;
      				}
      			}
      			
      		}
      		
      		
      		$cumulative[$i][7]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4]+$cumulative[$i][5]+$cumulative[$i][6];
      		$tot1+=$cumulative[$i][1];
      		$tot2+=$cumulative[$i][2];
      		$tot3+=$cumulative[$i][3];
      		$tot4+=$cumulative[$i][4];
      		$tot5+=$cumulative[$i][5];
      		$tot6+=$cumulative[$i][6];
      	}
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		$cumulative[sizeof($child_dist)][5]=$tot5;
      		$cumulative[sizeof($child_dist)][6]=$tot6;
      		$cumulative[sizeof($child_dist)][7]=$tot1+$tot2+$tot3+$tot4+$tot5+$tot6;
      	}
      	return($cumulative);
      	
      	//echo json_encode($cumulative);
      	
      }
      
      public function get_cumulative($from,$to,$type="") {
      	$this->load->model('dashboard_model');
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->dashboard_model->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$stat_id=$rolep['state_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	//$from='2014-04-01';
      	//$to='2017-05-26';
      	//echo $roles_id;
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	//$distrct=$newdistrict[0] ;
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      	{
      		//echo "select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name" ;
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      		
      		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      		//echo "select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.parent_id ='IND010' group by area_name order by area_name" ;
      		$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.parent_id ='IND010' group by area_name order by area_name")->result_array();
      		$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();
      		$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();
      		
      		$child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,count(child_basic_detail.child_id) as transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id   WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'  AND child_basic_detail.child_id in(select child_id from final_order where type_order = 'Cases transferred to other Dist/State/Country' )  GROUP BY child_area_detail.area_name")->result_array();
      		//OLD QUERY $child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, count(transfer_to) as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' and type_order='Cases transferred to other Dist/State/Country' GROUP BY child_area_detail.area_name")->result_array();
      		//NEW QUERY $child_transform_from = $this->db->query("select child_basic_detail.child_id,child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name ")->result_array();
      		
      		$child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
      		
      	}
      	else if( $roles_id==13 || $roles_id==20 )//DLC
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id from child_area_detail where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		
      		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      		
      		$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by area_name order by area_name")->result_array();
      		
      		$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
      		
      		$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
      		
      		$child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, SUM(CASE WHEN type_order = 'Cases transferred to other Dist/State/Country' THEN 1 ELSE 0 END) transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE  STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes'  GROUP BY child_area_detail.area_name")->result_array();
      		//echo "select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(transfer_to) as transfer_from from final_order  where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country' ) as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes' GROUP BY child_area_detail.area_name" ;
      		
      		$child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
      	}
      	
      	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		
      		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" .$division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      		
      		$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by area_name order by area_name")->result_array();
      		//echo "select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name" ;
      		$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
      		
      		$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
      		
      		$child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, SUM(CASE WHEN type_order = 'Cases transferred to other Dist/State/Country' THEN 1 ELSE 0 END) transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id  WHERE child_area_detail.area_id='".$dist_id."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
      	}
      	
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		$cumulative[$i][5]=0;
      		
      		
      		
      		if(sizeof($child_resc)>0)
      		{
      			foreach($child_resc as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][1]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_inv)>0)
      		{
      			foreach($child_inv as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][2]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      				}
      			}
      			
      		}
      		if(sizeof($child_fin)>0)
      		{
      			foreach($child_fin as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][3]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_ent)>0)
      		{
      			
      			foreach($child_ent as $row)
      			{
      				//print_r($child_ent);
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][4]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][4]=0;
      				}
      			}
      			
      		}
      		
      		
      		//print_r($child_transform_to);
      		foreach($child_transform_to as $row)
      		{
      			//print_r($child_transform_to);
      			if($child_dist[$i]['area_id']==$row['area_id'])
      			{
      				$cumulative[$i][5]=$row['transfer_to'];
      				break;
      			}
      			else{
      				$cumulative[$i][5]=0;
      			}
      		}
      		
      		foreach($child_transform_from as $row)
      		{
      			//print_r($child_transform_to);
      			if($child_dist[$i]['area_id']==$row['area_id'])
      			{
      				$cumulative[$i][6]=$row['transfer_from'];
      				break;
      			}
      			else{
      				$cumulative[$i][6]=0;
      			}
      		}
      		
      		
      		
      		
      		//$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
      		$tot1+=$cumulative[$i][1];
      		$tot2+=$cumulative[$i][2];
      		$tot3+=$cumulative[$i][3];
      		$tot4+=$cumulative[$i][4];
      		$tot5+=$cumulative[$i][5];
      		$tot6+=$cumulative[$i][6];
      		$tot7+=$cumulative[$i][7];
      		$tot8+=$cumulative[$i][8];
      		
      		
      		
      		
      		
      	}
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		$cumulative[sizeof($child_dist)][5]=$tot5;
      		$cumulative[sizeof($child_dist)][6]=$tot6;
      		$cumulative[sizeof($child_dist)][7]=$tot7;
      		$cumulative[sizeof($child_dist)][8]=(($tot1-$tot5)+$tot6);
      		
      		
      		
      	}
      	
      	return $cumulative ;
      	
      }
      
    //caste wise breakup 
    
      public  function get_category($from,$to,$dist) {
      	
      	$this->load->model('dashboard_model');
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->dashboard_model->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$stat_id=$rolep['state_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	//$from='2014-04-01';
      	//$to='2017-05-26';
      	//echo $roles_id;
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	
      	
      	//$from=$_POST['from'];
      	//$to=$_POST['to'];
      	//echo $roles_id;
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      	{
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010'  order by area_name")->result_array();
      		
      		$child_sc = $this->db->query("select sum(x.category='SC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='SC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_st = $this->db->query("select sum(category='ST') as num_child,y.area_name as area_name,y.area_id as area_id FROM child_area_detail as y  left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='ST' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_obc = $this->db->query("
		 select sum(x.category='OBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='OBC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_gen = $this->db->query("select sum(x.category='General') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='General' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_ebc = $this->db->query("select sum(x.category='EBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='EBC' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_other = $this->db->query("select sum(x.category='Other') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='Other' and y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      	}
      	else if($roles_id==13 || $roles_id==20 )//DLC
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		
      		$child_sc = $this->db->query("select sum(x.category='SC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='SC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			group by y.area_name order by y.area_name")->result_array();
      		
      		$child_st = $this->db->query("select sum(category='ST') as num_child,y.area_name as area_name,y.area_id as area_id FROM child_area_detail as y  left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='ST' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_obc = $this->db->query("
			 select sum(x.category='OBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='OBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_gen = $this->db->query("select sum(x.category='General') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='General' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      		$child_ebc = $this->db->query("select sum(x.category='EBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='EBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
      		$child_other = $this->db->query("select sum(x.category='Other') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='Other' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      	}
      	
      	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id ."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		
      		$child_sc = $this->db->query("select sum(x.category='SC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='SC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			group by y.area_name order by y.area_name")->result_array();
      		
      		$child_st = $this->db->query("select sum(category='ST') as num_child,y.area_name as area_name,y.area_id as area_id FROM child_area_detail as y  left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='ST' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_obc = $this->db->query("
			 select sum(x.category='OBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='OBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
      		
      		$child_gen = $this->db->query("select sum(x.category='General') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='General' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      		$child_ebc = $this->db->query("select sum(x.category='EBC') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
			 left join child_basic_detail as x on x.district_id =y.area_id
			 where  x.category='EBC' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
			 group by y.area_name order by y.area_name")->result_array();
      		$child_other = $this->db->query("select sum(x.category='Other') as num_child,y.area_name as area_name,y.area_id as area_id  FROM child_area_detail as y
		 left join child_basic_detail as x on x.district_id =y.area_id
		 where  x.category='Other' and y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
		 group by y.area_name order by y.area_name")->result_array();
      	}
      	
      	$cumulative = array();
      	
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		$cumulative[$i][5]=0;
      		$cumulative[$i][6]=0;
      		if(sizeof($child_sc)>0)
      		{
      			
      			foreach($child_sc as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][1]=$row['num_child'];
      					
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_st)>0)
      		{
      			foreach($child_st as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][2]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_obc)>0)
      		{
      			foreach($child_obc as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][3]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_gen)>0)
      		{
      			foreach($child_gen as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][4]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][4]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_ebc)>0)
      		{
      			foreach($child_ebc as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][5]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][5]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_other)>0)
      		{
      			foreach($child_other as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][6]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][6]=0;
      				}
      			}
      			
      		}
      		
      		$cumulative[$i][7]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4]+$cumulative[$i][5]+$cumulative[$i][6];
      		$tot1+=$cumulative[$i][1];
      		$tot2+=$cumulative[$i][2];
      		$tot3+=$cumulative[$i][3];
      		$tot4+=$cumulative[$i][4];
      		$tot5+=$cumulative[$i][5];
      		$tot6+=$cumulative[$i][6];
      	}
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		$cumulative[sizeof($child_dist)][5]=$tot5;
      		$cumulative[sizeof($child_dist)][6]=$tot6;
      		
      		
      	}
      	
      	
      	return $cumulative ;
      }
      
      public function get_orderafter_production($from,$to,$dist="")
      {
      	
      	
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	if($roles_id==2 || $roles_id==5|| $roles_id==7|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
      	{
      		
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id WHERE parent_id='IND010' and child_area_detail.area_id='".$dist_id."'
		       GROUP BY child_area_detail.area_name ")->result_array();
      		$ccii=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'cci' THEN 1 ELSE 0 END) cci
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$parents=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Parents' THEN 1 ELSE 0 END) Parents
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		
      		$fitperson=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_person' THEN 1 ELSE 0 END) fitperson
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$fitinstitution=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_institution' THEN 1 ELSE 0 END) fitfacility
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$otherplace=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'other_place' THEN 1 ELSE 0 END) otherplace
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$others=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Others' THEN 1 ELSE 0 END) Others
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		
      		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
      		
      		
      		
      		
      	}
      	
      	
      	if($roles_id==10 || $roles_id==11 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
      	{
      		
      		
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id WHERE parent_id='IND010'
		       GROUP BY child_area_detail.area_name ")->result_array();
      		$ccii=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'cci' THEN 1 ELSE 0 END) cci
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$parents=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Parents' THEN 1 ELSE 0 END) Parents
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		
      		$fitperson=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_person' THEN 1 ELSE 0 END) fitperson
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$fitinstitution=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_institution' THEN 1 ELSE 0 END) fitfacility
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$otherplace=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'other_place' THEN 1 ELSE 0 END) otherplace
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$others=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Others' THEN 1 ELSE 0 END) Others
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		
      		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
      		
      		
      	}
      	
      	else  if($roles_id==13 || $roles_id==20 )//for DLC
      	{
      		
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id WHERE
		 child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."') GROUP BY child_area_detail.area_name")->result_array();
      		$ccii=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'cci' THEN 1 ELSE 0 END) cci
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$parents=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Parents' THEN 1 ELSE 0 END) Parents
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		
      		$fitperson=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_person' THEN 1 ELSE 0 END) fitperson
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$fitinstitution=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'fit_institution' THEN 1 ELSE 0 END) fitfacility
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$otherplace=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'other_place' THEN 1 ELSE 0 END) otherplace
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$others=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN order_type = 'Others' THEN 1 ELSE 0 END) Others
		                from order_after_production left join child_basic_detail ON
                        order_after_production.child_id=child_basic_detail.child_id
                        left join child_area_detail
                        ON child_basic_detail.district_id =child_area_detail.area_id
		                WHERE
		                STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		
      		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
      		
      		
      	}
      	
      	//added by pooja ends
      	//district wise resuced child ends
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		$cumulative[$i][5]=0;
      		$cumulative[$i][6]=0;
      		$cumulative[$i][7]=0;
      		
      		
      		
      		if(sizeof($ccii)>0)
      		{
      			foreach($ccii as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][1]=$row['cci'];
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		
      		
      		if(sizeof($parents)>0)
      		{
      			foreach($parents as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][2]=$row['Parents'];
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      				}
      			}
      			
      		}
      		
      		
      		
      		if(sizeof($fitperson)>0)
      		{
      			foreach($fitperson as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][3]=$row['fitperson'];
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      				}
      			}
      			
      		}
      		
      		
      		if(sizeof($fitinstitution)>0)
      		{
      			foreach($fitinstitution as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][4]=$row['fitfacility'];
      					break;
      				}
      				else{
      					$cumulative[$i][4]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($otherplace)>0)
      		{
      			foreach($otherplace as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][5]=$row['otherplace'];
      					break;
      				}
      				else{
      					$cumulative[$i][5]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($others)>0)
      		{
      			foreach($others as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][6]=$row['Others'];
      					break;
      				}
      				else{
      					$cumulative[$i][6]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_dist_id)>0)
      		{
      			foreach($child_dist_id as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][7]=$row['area_id'];
      					break;
      				}
      				else{
      					$cumulative[$i][7]=0;
      				}
      			}
      			
      		}
      		
      		
      		
      		
      		
      		//$cumulative[$i][7]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4]+$cumulative[$i][5]+$cumulative[$i][6]+$cumulative[$i][7];
      		$tot1+=$cumulative[$i][1];
      		$tot2+=$cumulative[$i][2];
      		$tot3+=$cumulative[$i][3];
      		$tot4+=$cumulative[$i][4];
      		$tot5+=$cumulative[$i][5];
      		$tot6+=$cumulative[$i][6];
      		$tot7+=$cumulative[$i][7];
      		
      		
      		
      		
      	}
      	
      	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22 || $roles_id==13 || $roles_id==20 ){
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		$cumulative[sizeof($child_dist)][5]=$tot5;
      		$cumulative[sizeof($child_dist)][6]=$tot6;
      		$cumulative[sizeof($child_dist)][7]=$tot7;
      		
      	}
      	
      	
      	return($cumulative);
      }
   
      function get_transfer_status($from,$to,$dist)
      {
      	
      	$this->load->model('dashboard_model');
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->dashboard_model->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$stat_id=$rolep['state_id'];
      	endforeach;
      	
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	//$from='2014-04-01';
      	//$to='2017-05-26';
      	//echo $roles_id;
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)
      	
      	{
      		
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      		//print_r($child_dist);
      		//echo "select area_id,SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name" ;
      		
      		$child_transfer_to =$this->db->query("select area_id,SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		//print_r($child_transfer_to);
      		$child_transfer_from = $this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id1 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		//print_r($child_transfer_from);
      		$child_forwaded_cwc=$this->db->query("select area_id, count(district_id) as count_id2 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join  final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010'  and child_basic_detail.ls_activate='N'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		$child_dist_id =$this->db->query("select area_id from child_area_detail where parent_id='IND010' group by area_name order by area_id")->result_array();
      		//print_r($child_forwaded_cwc);
      	}
      	
      	
      	
      	if($roles_id==13 || $roles_id==20)
      	
      	{
      		
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		//print_r($child_dist);
      		
      		$child_transfer_to =$this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  GROUP BY child_area_detail.area_name")->result_array();
      		//print_r($child_transfer_to);
      		$child_transfer_from = $this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id1 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$child_forwaded_cwc=$this->db->query("select area_id, count(district_id) as count_id2 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join  final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010'  and child_basic_detail.ls_activate='N'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		$child_dist_id =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      	}
      	
      	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))
      	
      	{
      		
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010'  and area_id='".$dist_id."' group by area_name order by area_name")->result_array();
      		//print_r($child_dist);
      		$child_transfer_to =$this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.area_id='".$dist_id."' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		//print_r($child_transfer_to);
      		//	echo "select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id1 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.area_id='".$dist_id."' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name" ;
      		$child_transfer_from = $this->db->query("select area_id, SUM(CASE WHEN district != district_id THEN 1 ELSE 0 END) count_id1 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district left join final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010' and STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      		
      		$child_forwaded_cwc=$this->db->query("select area_id, count(district_id) as count_id2 from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join  final_order ON child_basic_detail.child_id=final_order.child_id where final_ordered !='YES' AND child_area_detail.parent_id='IND010'  and child_basic_detail.ls_activate='N'  AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name")->result_array();
      	}
      	
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		
      		
      		
      		
      		if(sizeof($child_transfer_to)>0)
      		{
      			foreach($child_transfer_to as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][1]=$row['count_id'];
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_transfer_from)>0)
      		{
      			foreach($child_transfer_from as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][2]=$row['count_id1'];
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      				}
      			}
      			
      		}
      		if(sizeof($child_forwaded_cwc)>0)
      		{
      			foreach($child_forwaded_cwc as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][3]=$row['count_id2'];
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_dist_id)>0)
      		{
      			foreach($child_dist_id as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][4]=$row['area_id'];
      					break;
      				}
      				else{
      					$cumulative[$i][4]=0;
      				}
      			}
      			
      		}
      		
      		
      		
      		
      		
      		//$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
      		$tot1+=$cumulative[$i][1];
      		$tot2+=$cumulative[$i][2];
      		$tot3+=$cumulative[$i][3];
      		$tot4+=$cumulative[$i][4];
      		$tot5+=$cumulative[$i][5];
      		
      		
      	}
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		$cumulative[sizeof($child_dist)][5]=$tot5;
      		
      	}
      	
      	
      	//echo $cumulative;
      	return $cumulative ;
      	
      }
      
      public function rescued_child_labourer_registered($from,$to,$user)
      {
      	
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	
      	if($roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//for lC and Lc operator
      	{
      		$child_dist =$this->db->query("SELECT child_area_detail.area_name as district,child_area_detail.area_id as area_id
      				
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
		              GROUP BY child_area_detail.area_name")->result_array();
      		$leo_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LEO' THEN 1 ELSE 0 END) LEO
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$ls_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LS' THEN 1 ELSE 0 END) LS
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$cwc_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN  account_role.name = 'CWC' THEN 1 ELSE 0 END) CWC
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
      		
      	}
      	else if($roles_id==13 || $roles_id==20)
      	{
      		
      		
      		$child_dist =$this->db->query("SELECT child_area_detail.area_name as district,child_area_detail.area_id as area_id
      				
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
                      WHERE
                      child_basic_detail.district_id COLLATE utf8_unicode_ci in (select district_id from division_details  where division_details.division_id='" .$division_id."')
		              GROUP BY child_area_detail.area_name")->result_array();
      		$leo_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LEO' THEN 1 ELSE 0 END) LEO
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$ls_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LS' THEN 1 ELSE 0 END) LS
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$cwc_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN  account_role.name = 'CWC' THEN 1 ELSE 0 END) CWC
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
      		
      		
      		
      	}
      	else if($roles_id==2 || $roles_id==5 || $roles_id==7 || $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
      	{
      		
      		$child_dist =$this->db->query("SELECT child_area_detail.area_name as district,child_area_detail.area_id as area_id
      				
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
                      WHERE child_area_detail.area_id='".$dist_id."'
		              GROUP BY child_area_detail.area_name")->result_array();
      		$leo_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LEO' THEN 1 ELSE 0 END) LEO
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$ls_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN account_role.name = 'LS' THEN 1 ELSE 0 END) LS
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$cwc_list=$this->db->query("select child_area_detail.area_id as area_id, SUM(CASE WHEN  account_role.name = 'CWC' THEN 1 ELSE 0 END) CWC
                      from child_area_detail
                      join  child_basic_detail ON
                      child_area_detail.area_id=child_basic_detail.district_id
			          join staff ON
			          child_basic_detail.uid=staff.staff_id
			          join account_role ON
			          staff.account_role_id=account_role.account_role_id
			          WHERE
		              STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' GROUP BY child_area_detail.area_name ")->result_array();
      		$child_dist_id =$this->db->query("select child_area_detail.area_id as area_id from child_area_detail
		        left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id
		       GROUP BY child_area_detail.area_id ")->result_array();
      		
      	}
      	//added by pooja ends
      	//district wise resuced child ends
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['district'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		
      		
      		if(sizeof($ls_list)>0)
      		{
      			foreach($ls_list as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][1]=$row['LS'];
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		
      		
      		if(sizeof($leo_list)>0)
      		{
      			foreach($leo_list as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][2]=$row['LEO'];
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      				}
      			}
      			
      		}
      		
      		
      		
      		if(sizeof($cwc_list)>0)
      		{
      			foreach($cwc_list as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][3]=$row['CWC'];
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_dist_id)>0)
      		{
      			foreach($child_dist_id as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative[$i][4]=$row['area_id'];
      					break;
      				}
      				else{
      					$cumulative[$i][4]=0;
      				}
      			}
      			
      		}
      		
      		
      		
      		
      		
      		$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
      		$tot1+=$cumulative[$i][1];
      		$tot2+=$cumulative[$i][2];
      		$tot3+=$cumulative[$i][3];
      		$tot4+=$cumulative[$i][4];
      		$tot5+=$cumulative[$i][5];
      		
      		
      		
      	}
      	
      	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22 || $roles_id==13 || $roles_id==20 ){
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		$cumulative[sizeof($child_dist)][5]=($tot1+$tot2+$tot3);
      	}
      	
      	
      	return($cumulative);
      }
      
      public function lrd_chart_details($from,$to,$dist_id)
      {
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      	{
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      		//echo "select sum(interest_of_rehabilitation='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.interest_of_rehabilitation from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name";
      		
      		$child_1800 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='0' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
      		$child_3000 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='1' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
      		
      		$child_5000 = $this->db->query("select sum(deposited='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.deposited from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
      		
      		$child_F20 = $this->db->query("select sum(interest_of_rehabilitation='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.interest_of_rehabilitation from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      		//$child_F50 = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.mtransfer_proof from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND eligible_cm_fund='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		$child_F50 = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.mtransfer_proof='Yes'
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      	}
      	else if($roles_id==13 || $roles_id==20)
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		$child_1800 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='0' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
      		$child_3000 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='1' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
      		
      		$child_5000 = $this->db->query("select sum(deposited='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.deposited from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
      		
      		$child_F20 = $this->db->query("select sum(interest_of_rehabilitation='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.interest_of_rehabilitation from child_area_detail as y left join (child_labour_resource_department as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
      		
      		//$child_F50 = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.mtransfer_proof from child_area_detail as y left join (cm_fund_eligibility as w left join child_basic_detail as x on w.child_id=x.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND eligible_cm_fund='Yes' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name having num_child > 0 order by area_name")->result_array();
      		$child_F50=$this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.mtransfer_proof='Yes'
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      	}
      	else if($roles_id==2 || $roles_id==5 || $roles_id==7|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19)
      	{
      		
      		
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id='" . $dist_id ."' group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		//echo "select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='0' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name" ;
      		//$child_1800 = $this->db->query("select sum(package='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.package from child_area_detail as y left join (child_basic_detail as x left join child_labour_resource_department as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND w.package_type='0' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		//echo "SELECT sum(w.package='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.package_type='0' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
      		$child_1800 = $this->db->query("SELECT sum(w.package='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.package_type='0' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
      		$child_3000 = $this->db->query("SELECT sum(w.package='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.package_type='1' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
      		//echo "SELECT sum(w.deposited='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
      		$child_5000 = $this->db->query("SELECT sum(w.deposited='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
      		
      		$child_F20 = $this->db->query("SELECT sum(w.interest_of_rehabilitation='Yes') as num_child, x.area_id FROM child_labour_resource_department as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
      		//echo "SELECT sum(w.mtransfer_proof='Yes') as num_child, x.area_id FROM cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
      		//$child_F50 = $this->db->query("select sum(mtransfer_proof='Yes') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND eligible_cm_fund='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
      		$child_F50 =$this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.mtransfer_proof='Yes'
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      	}
      	//print_r($child_1800);
      	// print_r($child_3000);
      	
      	$cumulative = array();
      	$reh_tot=array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		if(sizeof($child_1800)>0)
      		{
      			$cond="package";
      			$cond_val="Yes";
      			$type=0;
      			foreach($child_1800 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][1]=0 ;
      					}
      					else{
      						$cumulative[$i][1]=$row['num_child'];
      						$cumulative[$i][1]='<a href="'.base_url().'index.php?dashboard/get_lrd_18k/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'/'.$type.'">'.$row['num_child'].'</a>';
      						$reh_tot[$i][1]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      					$reh_tot[$i][1]=0;
      				}
      			}
      			
      		}
      		if(sizeof($child_3000)>0)
      		{
      			$cond="package";
      			$cond_val="Yes";
      			$type=1;
      			foreach($child_3000 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][2]=0 ;
      						$reh_tot[$i][2]=0;
      					}
      					else{
      						$cumulative[$i][2]=$row['num_child'];
      						$cumulative[$i][2]='<a href="'.base_url().'index.php?dashboard/get_lrd_18k/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'/'.$type.'">'.$row['num_child'].'</a>';
      						$reh_tot[$i][2]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      					$reh_tot[$i][2]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_5000)>0)
      		{
      			$cond="deposited";
      			$cond_val="Yes";
      			foreach($child_5000 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][3]=0 ;
      						$reh_tot[$i][3]=0;
      					}
      					else{
      						$cumulative[$i][3]=$row['num_child'];
      						$cumulative[$i][3]='<a href="'.base_url().'index.php?dashboard/get_lrd_50k/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$reh_tot[$i][3]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      					$reh_tot[$i][3]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_F20)>0)
      		{
      			
      			$cond="interest_of_rehabilitation";
      			$cond_val="Yes";
      			
      			foreach($child_F20 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][4]=0 ;
      						$reh_tot[$i][4]=0;
      					}
      					else{
      						$cumulative[$i][4]=$row['num_child'];
      						$cumulative[$i][4]='<a href="'.base_url().'index.php?dashboard/get_lrd_20k/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$reh_tot[$i][4]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][4]=0;
      					$reh_tot[$i][4]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_F50)>0)
      		{
      			
      			$cond="mtransfer_proof";
      			$cond_val="Yes";
      			foreach($child_F50 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][5]=0 ;
      						$reh_tot[$i][5]=0;
      					}
      					else{
      						$cumulative[$i][5]=$row['num_child'];
      						$cumulative[$i][5]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$reh_tot[$i][5]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][5]=0;
      					$reh_tot[$i][5]=0;
      				}
      			}
      			
      		}
      		
      		
      		$tot1+=$reh_tot[$i][1];
      		$tot2+=$reh_tot[$i][2];
      		$tot3+=$reh_tot[$i][3];
      		$tot4+=$reh_tot[$i][4];
      		$tot5+=$reh_tot[$i][5];
      		
      		
      	}
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		$cumulative[sizeof($child_dist)][5]=$tot5;
      	}
      	// print_r($cumulative)."<br>" ;
      	return $cumulative ;
      }
      
      public function cmrelief_chart_details($from,$to,$dist_id){
      	
      	
      	$this->load->model('dashboard_model');
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->dashboard_model->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$stat_id=$rolep['state_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21  || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      	{
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      		
      		// echo "select sum(physically_verified='Yes') as num_child,area_id from (select y.area_id, y.area_name,w.physically_verified from child_area_detail as y left join (child_basic_detail as x left join cm_fund_eligibility as w on x.child_id=w.child_id AND w.physically_verified='Yes' ) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name" ;
      		/*"SELECT count(*)as child_sum ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
      		 where fnd.physically_verified='Yes'
      		 and area.parent_id='IND010'
      		 and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and final.transfer_to IS NULL ))
      		 and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN '2014-04-01' AND '2018-02-12'
      		 group by area.area_id order by area.area_name" ;*/
      		
      		$child_physically_verified_yes = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified='Yes'
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		
      		$child_physically_verified_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified='No'
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_eligible_cm_yes = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.eligible_cm_fund='Yes'
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_eligible_cm_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.eligible_cm_fund='No'
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_fund_paid = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.mtransfer_proof='Yes'
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_demand_raised_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.demand_raised='1'
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_demand_received= $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.demand_received='1'
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_bankdetails= $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified =  'Yes' AND fnd.bank_details_id=0
	  		and area.parent_id='IND010'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		
      	}
      	else if($roles_id==13 || $roles_id==20 ){
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		
      		$child_physically_verified_yes = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified='Yes'
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		
      		$child_physically_verified_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified='No'
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_eligible_cm_yes = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.eligible_cm_fund='Yes'
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_eligible_cm_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.eligible_cm_fund='No'
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_fund_paid = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.mtransfer_proof='Yes'
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_demand_raised_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.demand_raised='1'
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_demand_received= $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.demand_received='1'
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_bankdetails= $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified =  'Yes' AND fnd.bank_details_id=0
	  		and area.parent_id='IND010'
			and area.area_id in (select division_details.district_id from division_details  where division_details.division_id='" . $dist_id ."')
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      	}
      	else if($roles_id==2 || $roles_id==5 || $roles_id==7|| $roles_id==6 || $roles_id==8 || $roles_id==14 || $roles_id==16 || $roles_id==18 || $roles_id==19){
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id='" . $dist_id ."' group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		
      		
      		//echo "select sum(w.physically_verified='Yes') as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'" ;
      		$child_physically_verified_yes = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified='Yes'
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		
      		$child_physically_verified_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified='No'
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_eligible_cm_yes = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.eligible_cm_fund='Yes'
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_eligible_cm_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.eligible_cm_fund='No'
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_fund_paid = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.mtransfer_proof='Yes'
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_demand_raised_no = $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.demand_raised='1'
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_demand_received= $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.demand_received='1'
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		$child_bankdetails= $this->db->query("SELECT count(*)as num_child ,area.area_name,area.area_id from child_basic_detail as child inner join cm_fund_eligibility as fnd on child.child_id=fnd.child_id inner join final_order as final on final.child_id=child.child_id , child_area_detail area
	  		where fnd.physically_verified =  'Yes' AND fnd.bank_details_id=0
	  		and area.parent_id='IND010'
			and area.area_id='" . $dist_id ."'
	  		and(area.area_id=final.transfer_to or ( area.area_id=child.district_id and (final.transfer_to IS NULL or final.transfer_to='')  ))
	  		and STR_TO_DATE(child.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'
	  		group by area.area_id order by area.area_name")->result_array();
      		
      		//$child_bankdetails= $this->db->query("select count(availabil_bankdetails='' ) as num_child,x.area_id from cm_fund_eligibility as w INNER JOIN child_basic_detail hp INNER JOIN child_area_detail x on w.child_id = hp.child_id where hp.district_id='" . $dist_id ."' AND x.area_id='" . $dist_id ."' AND w.physically_verified='Yes' AND STR_TO_DATE(hp.idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'")->result_array();
      	}
      	
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		$cumulative[$i][3]=0;
      		$cumulative[$i][4]=0;
      		$cumulative[$i][5]=0;
      		$cumulative[$i][6]=0;
      		$cm_tot=array();
      		if(sizeof($child_physically_verified_yes)>0)
      		{
      			$cond="physically_verified";
      			$cond_val="Yes";
      			foreach($child_physically_verified_yes as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][1]=0 ;
      						$cm_tot[$i][1]=0 ;
      					}
      					else{
      						$cumulative[$i][1]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$cm_tot[$i][1]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      					$cm_tot[$i][1]=0 ;
      				}
      			}
      			
      		}
      		
      		/*if(sizeof($child_physically_verified_no)>0)
      		 {
      		 $cond="physically_verified";
      		 $cond_val="No";
      		 foreach($child_physically_verified_no as $row)
      		 {
      		 if($child_dist[$i]['area_id']==$row['area_id'])
      		 {
      		 if($row['num_child']==NULL){
      		 $cumulative[$i][2]=0 ;
      		 $cm_tot[$i][2]=0 ;
      		 }
      		 else{
      		 $cumulative[$i][2]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      		 $cm_tot[$i][2]=$row['num_child'];
      		 }
      		 break;
      		 }
      		 else{
      		 $cumulative[$i][2]=0;
      		 $cm_tot[$i][2]=0 ;
      		 }
      		 }
      		 
      		 } */
      		
      		if(sizeof($child_eligible_cm_yes)>0)
      		{
      			$cond="eligible_cm_fund";
      			$cond_val="Yes";
      			foreach($child_eligible_cm_yes as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][2]=0 ;
      						$cm_tot[$i][2]=0 ;
      					}
      					else{
      						$cumulative[$i][2]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$cm_tot[$i][2]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      					$cm_tot[$i][2]=0 ;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_eligible_cm_no)>0)
      		{
      			$cond="eligible_cm_fund";
      			$cond_val="No";
      			foreach($child_eligible_cm_no as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][3]=0 ;
      						$cm_tot[$i][3]=0 ;
      					}
      					else{
      						$cumulative[$i][3]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$cm_tot[$i][3]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][3]=0;
      					$cm_tot[$i][3]=0 ;
      				}
      			}
      			
      		}
      		
      		
      		
      		if(sizeof($child_demand_raised_no)>0)
      		{
      			$cond="demand_raised";
      			$cond_val="1";
      			foreach($child_demand_raised_no as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][4]=0 ;
      						$cm_tot[$i][4]=0 ;
      					}
      					else{
      						$cumulative[$i][4]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$cm_tot[$i][4]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][4]=0;
      					$cm_tot[$i][4]=0 ;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_demand_received)>0)
      		{
      			$cond="demand_received";
      			$cond_val="1";
      			foreach($child_demand_received as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][5]=0 ;
      						$cm_tot[$i][5]=0 ;
      					}
      					else{
      						$cumulative[$i][5]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$cm_tot[$i][5]=$row['num_child'];
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][5]=0;
      					$cm_tot[$i][5]=0 ;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_bankdetails)>0)
      		{
      			$cond="availabil_bankdetails";
      			$cond_val="0";
      			foreach($child_bankdetails as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][6]=0 ;
      						$cm_tot[$i][6]=0 ;
      					}
      					else{
      						
      						$cumulative[$i][6]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$cm_tot[$i][6]=$row['num_child'] ;
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][6]=0;
      					$cm_tot[$i][6]=0 ;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_fund_paid)>0)
      		{
      			$cond="mtransfer_proof";
      			$cond_val="Yes";
      			foreach($child_fund_paid as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					if($row['num_child']==NULL || $row['num_child']==0){
      						$cumulative[$i][7]=0 ;
      						$cm_tot[$i][7]=0 ;
      					}
      					else{
      						
      						$cumulative[$i][7]='<a href="'.base_url().'index.php?dashboard/get_cm_relief_data/'.$from.'/'.$to.'/'.$row['area_id'].'/'.$cond.'/'.$cond_val.'">'.$row['num_child'].'</a>';
      						$cm_tot[$i][7]=$row['num_child'] ;
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][7]=0;
      					$cm_tot[$i][7]=0 ;
      				}
      			}
      			
      		}
      		
      		$tot1+=$cm_tot[$i][1];
      		$tot2+=$cm_tot[$i][2];
      		$tot3+=$cm_tot[$i][3];
      		$tot4+=$cm_tot[$i][4];
      		$tot5+=$cm_tot[$i][5];
      		$tot6+=$cm_tot[$i][6];
      		$tot7+=$cm_tot[$i][7];
      	}
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		$cumulative[sizeof($child_dist)][0]=Total;
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      		$cumulative[sizeof($child_dist)][3]=$tot3;
      		$cumulative[sizeof($child_dist)][4]=$tot4;
      		$cumulative[sizeof($child_dist)][5]=$tot5;
      		$cumulative[sizeof($child_dist)][6]=$tot6;
      		$cumulative[sizeof($child_dist)][7]=$tot7;
      	}
      	return $cumulative ;
      }
      function edu_rehabilation_part($from,$to,$dist)
      {
      	
      	$this->load->model('dashboard_model');
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->dashboard_model->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$stat_id=$rolep['state_id'];
      	endforeach;
      	
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	//$from='2014-04-01';
      	//$to='2017-05-26';
      	//echo $roles_id;
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	
      	
      	
      	
      	//$from=$_POST['from'];
      	//	$to=$_POST['to'];
      	//echo $roles_id;
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      	{
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      		$child_Enrolled = $this->db->query("select sum(enrolled_school='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      	}
      	else if($roles_id==13 || $roles_id==20 )
      	{
      		$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id as area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      		$child_Enrolled = $this->db->query("select sum(enrolled_school='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department  as w on x.child_id=w.child_id) on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      		
      	}
      	else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
      	{
      		$child_dist=$this->db->query("select sum(enrolled_school='Yes') as num_child,area_name,area_id from child_education_department left join child_basic_detail  ON child_basic_detail.child_id=child_education_department.child_id left join child_area_detail ON child_area_detail.area_id=child_education_department.dist  where child_education_department.dist='". $dist_id."' AND STR_TO_DATE(child_basic_detail.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by area_name order by area_name")->result_array();
      		$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" .$division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      		$child_Enrolled = $this->db->query("select sum(enrolled_school='Yes') as num_child,area_id from (select y.area_id, y.area_name, w.enrolled_school from child_area_detail as y left join (child_basic_detail as x left join child_education_department  as w on x.child_id=w.child_id) on x.district_id =y.area_id where w.dist COLLATE utf8_unicode_ci ='". $dist_id."' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."') Z group by area_name order by area_name")->result_array();
      	}
      	
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative[$i][1]=0;
      		$cumulative[$i][2]=0;
      		
      		
      		
      		if(sizeof($child_resc)>0)
      		{
      			foreach($child_resc as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					$cumulative[$i][1]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		
      	
      		
      		if(sizeof($child_Enrolled)>0)
      		{
      			foreach($child_Enrolled as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					if($row['num_child']==NULL){
      						$cumulative[$i][2]=0 ;
      					}
      					else{
      						$cumulative[$i][2]=$row['num_child'];
      						
      					}
      					break;
      				}
      				else{
      					$cumulative[$i][2]=0;
      				}
      			}
      			
      		}
      		
      		
      		$tot1+=$cumulative[$i][1];
      		$tot2+=$cumulative[$i][2];
      		
      	}
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		$cumulative[sizeof($child_dist)][0]="Total";
      		$cumulative[sizeof($child_dist)][1]=$tot1;
      		$cumulative[sizeof($child_dist)][2]=$tot2;
      	}
      	
      	return ($cumulative);
      	
      	
      	
      }
      public function children_cci_chart($from,$to,$dist="")
      {
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	
      	
      	
      	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))
      	{
      		
      		$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND   cci_area.area_id='".$dist_id."' group by order_after_production.ccis_name ")->result_array();
      		$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci  where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' AND cci_area.area_id='".$dist_id."'  group by order_after_production.ccis_name ")->result_array();	
      	}
      	else
      		if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
      		{
      			
      			$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
      			$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
      			
      		}
      	else if($roles_id==13 || $roles_id==20)
      	{
      		
      		$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where cci_area.area_id COLLATE utf8_unicode_ci in (select district_id from division_details where division_details.division_id='IND010009') group by order_after_production.ccis_name ")->result_array();
      		$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
      	}
      	
      	$cumulative = array();
      	for($i=0; $i<sizeof($cci_name); $i++){
      		$cumulative[$i]["cci_list"]=$cci_name[$i]['cci_name'];
      		
      		
      		
      		
      		
      		
      		
      		if(sizeof($child_num)>0)
      		{
      			foreach($child_num as $row)
      			{
      				
      				if($cci_name[$i]['cci_id']==$row['cci_id'])
      				{
      					 $cumulative[$i]["no_of_children"]=$row['count'];
      					break;
      				}
      				else{
      					$cumulative[$i]["no_of_children"]=0;
      				}
      			}
      			
      		}
      		
      		
      		
      	}
      	
      	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22 || $roles_id==13 || $roles_id==20 ){
      		if(sizeof($cci_dist)>0)
      		{
      			$cumulative[sizeof($cci_name)][0]=Total;
      			$cumulative[sizeof($cci_name)][1]=$tot1;
      			$cumulative[sizeof($cci_name)][2]=$tot2;
      		}
      		
      	}
      	
      	
      	return($cumulative);
      	
      	
      }
      
      
      public function cumulative_chart($from,$to,$dist="")
      {
      $this->load->model('dashboard_model');
      $ses_ids=$this->session->userdata('login_user_id');
      $role=$this->dashboard_model->get_role_id($ses_ids);
      foreach($role as $rolep):
      $roles_id=$rolep['account_role_id'];
      $dist_id=$rolep['district_id'];
      $stat_id=$rolep['state_id'];
      endforeach;
      
      $newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      foreach($newdistrict as $newdistricts):
      $division_id=$newdistricts['division_id'];
      endforeach;
      
      $newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      //$from='2014-04-01';
      //$to='2017-05-26';
      //echo $roles_id;
      foreach($newdistrict as $newdistricts):
      $division_id=$newdistricts['division_id'];
      endforeach;
      //$distrct=$newdistrict[0] ;
      
      if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      {
      	$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      	$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.parent_id ='IND010' AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      	$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.parent_id ='IND010' group by area_name order by area_name")->result_array();
      	$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();
      	$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();
      	
      	$child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,count(child_basic_detail.child_id) as transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id   WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."'  AND child_basic_detail.child_id in(select child_id from final_order where type_order = 'Cases transferred to other Dist/State/Country' )  GROUP BY child_area_detail.area_name")->result_array();
      	
      	$child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
      	
      	//OLD QUERY $child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, count(transfer_to) as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' and type_order='Cases transferred to other Dist/State/Country' GROUP BY child_area_detail.area_name")->result_array();
      	//NEW QUERY $child_transform_from = $this->db->query("select child_basic_detail.child_id,child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name ")->result_array();
      	
      	
      	
      }
      else if( $roles_id==13 || $roles_id==20 )//DLC
      {
      	$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id from child_area_detail where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      	
      	$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      	
      	$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by area_name order by area_name")->result_array();
      	
      	$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
      	
      	$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
      	
      	$child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, SUM(CASE WHEN type_order = 'Cases transferred to other Dist/State/Country' THEN 1 ELSE 0 END) transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE  STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes'  GROUP BY child_area_detail.area_name")->result_array();
      	//echo "select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(transfer_to) as transfer_from from final_order  where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country' ) as transfer_from from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id WHERE STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes' GROUP BY child_area_detail.area_name" ;
      	
      	$child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
      }
      
      else if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))//for ls ,leo and all district level
      {
      	$child_dist =$this->db->query("select child_area_detail.area_name as area_name,child_area_detail.area_id from child_area_detail
			   where child_area_detail.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where child_area_detail.area_id='" . $dist_id."') group by child_area_detail.area_name order by child_area_detail.area_name")->result_array();
      	
      	$child_resc = $this->db->query("select  count(x.child_id) as num_child,y.area_id, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" .$division_id."') AND  STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."'  group by area_name order by y.area_name")->result_array();
      	//echo "select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by area_name order by area_name" ;
      	$child_inv = $this->db->query("select  count(x.child_id) as num_child, y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N'   where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND  y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."') group by area_name order by area_name")->result_array();
      	
      	$child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
      	
      	$child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name,area_id from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND y.area_id COLLATE utf8_unicode_ci in (select division_details.district_id from division_details  where division_details.division_id='" . $division_id."')) Z group by area_name order by area_name")->result_array();
      	
      	$child_transform_to = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name, SUM(CASE WHEN type_order = 'Cases transferred to other Dist/State/Country' THEN 1 ELSE 0 END) transfer_to from child_area_detail left join child_basic_detail ON child_area_detail.area_id=child_basic_detail.district_id left join final_order ON child_basic_detail.child_id=final_order.child_id  WHERE child_area_detail.area_id='".$dist_id."' AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' AND final_ordered='Yes' GROUP BY child_area_detail.area_name")->result_array();
      	
      	$child_transform_from = $this->db->query("select child_area_detail.area_id as area_id,child_area_detail.area_name as area_name,(select count(child_basic_detail.child_id) as transfer_from from final_order left join child_basic_detail ON final_order.child_id=child_basic_detail.child_id AND STR_TO_DATE(idate_of_rescue,'%Y-%m-%d') BETWEEN '".$from."' AND '".$to."' where final_order.transfer_to=child_area_detail.area_id and type_order='Cases transferred to other Dist/State/Country') as transfer_from from child_area_detail  where child_area_detail.parent_id='IND010' GROUP BY child_area_detail.area_name")->result_array();
      }
      
      $cumulative = array();
      for($i=0; $i<sizeof($child_dist); $i++){
      	$cumulative[$i][0]=$child_dist[$i]['area_name'];
      	$cumulative[$i][1]=0;
      	$cumulative[$i][2]=0;
      	$cumulative[$i][3]=0;
      	$cumulative[$i][4]=0;
      	$cumulative[$i][5]=0;
      	
      	
      	
      	if(sizeof($child_resc)>0)
      	{
      		foreach($child_resc as $row)
      		{
      			if($child_dist[$i]['area_id']==$row['area_id'])
      			{
      				
      				$cumulative[$i][1]=$row['num_child'];
      				break;
      			}
      			else{
      				$cumulative[$i][1]=0;
      			}
      		}
      		
      	}
      	
      	if(sizeof($child_inv)>0)
      	{
      		foreach($child_inv as $row)
      		{
      			if($child_dist[$i]['area_id']==$row['area_id'])
      			{
      				$cumulative[$i][2]=$row['num_child'];
      				break;
      			}
      			else{
      				$cumulative[$i][2]=0;
      			}
      		}
      		
      	}
      	
      	if(sizeof($child_fin)>0)
      	{
      		foreach($child_fin as $row)
      		{
      			
      			if($child_dist[$i]['area_id']==$row['area_id'])
      			{
      				$cumulative[$i][3]=$row['num_child'];
      				break;
      			}
      			else{
      				$cumulative[$i][3]=0;
      			}
      		}
      		
      	}
      	
      	if(sizeof($child_ent)>0)
      	{
      		
      		foreach($child_ent as $row)
      		{
      			//print_r($child_ent);
      			if($child_dist[$i]['area_id']==$row['area_id'])
      			{
      				$cumulative[$i][4]=$row['num_child'];
      				break;
      			}
      			else{
      				$cumulative[$i][4]=0;
      			}
      		}
      		
      	}
      	
      	
      	//print_r($child_transform_to);
      	foreach($child_transform_to as $row)
      	{
      		//print_r($child_transform_to);
      		if($child_dist[$i]['area_id']==$row['area_id'])
      		{
      			$cumulative[$i][5]=$row['transfer_to'];
      			break;
      		}
      		else{
      			$cumulative[$i][5]=0;
      		}
      	}
      	
      	foreach($child_transform_from as $row)
      	{
      		//print_r($child_transform_to);
      		if($child_dist[$i]['area_id']==$row['area_id'])
      		{
      			$cumulative[$i][6]=$row['transfer_from'];
      			break;
      		}
      		else{
      			$cumulative[$i][6]=0;
      		}
      	}
      	
      	
      	
      	
      	//$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
      	$tot1+=$cumulative[$i][1];
      	$tot2+=$cumulative[$i][2];
      	$tot3+=$cumulative[$i][3];
      	$tot4+=$cumulative[$i][4];
      	$tot5+=$cumulative[$i][5];
      	$tot6+=$cumulative[$i][6];
      	$tot7+=$cumulative[$i][7];
      	$tot8+=$cumulative[$i][8];
      	
      	
      	
      	
      	
      }
      
      if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      	
      	$cumulative[sizeof($child_dist)][0]=Total;
      	$cumulative[sizeof($child_dist)][1]=$tot1;
      	$cumulative[sizeof($child_dist)][2]=$tot2;
      	$cumulative[sizeof($child_dist)][3]=$tot3;
      	$cumulative[sizeof($child_dist)][4]=$tot4;
      	$cumulative[sizeof($child_dist)][5]=$tot5;
      	$cumulative[sizeof($child_dist)][6]=$tot6;
      	$cumulative[sizeof($child_dist)][7]=$tot7;
      	$cumulative[sizeof($child_dist)][8]=(($tot1-$tot5)+$tot6);
      	
      	
      	
      }
      
      return $cumulative ;
      
}
public function get_report_childs_to_cci_data($from,$to,$dist="")
{
	$ses_ids=$this->session->userdata('login_user_id');
	$role=$this->get_role_id($ses_ids);
	foreach($role as $rolep):
	$roles_id=$rolep['account_role_id'];
	$dist_id=$rolep['district_id'];
	endforeach;
	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
	foreach($newdistrict as $newdistricts):
	$division_id=$newdistricts['division_id'];
	endforeach;
	
	if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19))
	{
		
		$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND   cci_area.area_id='".$dist_id."' group by order_after_production.ccis_name ")->result_array();
		$cci_dist=$this->db->query("select child_area_detail.area_name as cci_dist,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND cci_area.area_id='".$dist_id."'  AND STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by order_after_production.ccis_name")->result_array();
		$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci  where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' AND cci_area.area_id='".$dist_id."'  group by order_after_production.ccis_name ")->result_array();
		$child_dist_order=$this->db->query("select order_after_production.cci_dist as order_cci_dist ,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' AND cci_area.area_id='".$dist_id."'  group by order_after_production.ccis_name ")->result_array();
		$dist=$this->db->query("select cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND cci_area.area_id='".$dist."'  group by order_after_production.ccis_name ")->result_array();
		
		
	}
	else
		if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//for lC and Lc operator
		{
			//echo "select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' and cci_area.area_name!='' group by order_after_production.ccis_name " ;
			$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
			$cci_dist=$this->db->query("select child_area_detail.area_name as cci_dist,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail  on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by order_after_production.ccis_name")->result_array();
			$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
			$child_dist_order=$this->db->query("select order_after_production.cci_dist as order_cci_dist ,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id  left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
			$dist=$this->db->query("select cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
			
		}
	else if($roles_id==13 || $roles_id==20)
	{
		
		$cci_name=$this->db->query("select cci_area.area_name as cci_name,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where cci_area.area_id COLLATE utf8_unicode_ci in (select district_id from division_details where division_details.division_id='IND010009') group by order_after_production.ccis_name ")->result_array();
		$cci_dist=$this->db->query("select child_area_detail.area_name as cci_dist,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' AND STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' group by order_after_production.ccis_name")->result_array();
		$child_num=$this->db->query("select count(child_basic_detail.child_id) as count,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
		$child_dist_order=$this->db->query("select order_after_production.cci_dist as order_cci_dist ,cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on  child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist   COLLATE utf8_unicode_ci where  STR_TO_DATE(order_after_production.cci_date,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' AND order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
		$dist=$this->db->query("select cci_area.id as cci_id FROM child_basic_detail left join order_after_production on order_after_production.child_id=child_basic_detail.child_id left join child_area_detail on child_area_detail.area_id=order_after_production.cci_dist left join cci_area on cci_area.id=order_after_production.ccis_name and cci_area.area_id=order_after_production.cci_dist COLLATE utf8_unicode_ci where order_after_production.order_type='cci' group by order_after_production.ccis_name ")->result_array();
	}
	
	$cumulative = array();
	for($i=0; $i<sizeof($cci_name); $i++){
		$cumulative[$i][0]=$cci_name[$i]['cci_name'];
		$cumulative[$i][1]=0;
		$cumulative[$i][2]=0;
		$cumulative[$i][3]=0;
		
		
		
		
		
		if(sizeof($cci_dist)>0)
		{
			foreach($cci_dist as $row)
			{
				
				if($cci_name[$i]['cci_id']==$row['cci_id'])
				{
					
					$cumulative[$i][1]=$row['cci_dist'];
					break;
				}
				else{
					$cumulative[$i][1]=0;
				}
			}
			
		}
		
		if(sizeof($child_num)>0)
		{
			foreach($child_num as $row)
			{
				
				if($cci_name[$i]['cci_id']==$row['cci_id'])
				{
					$cumulative[$i][2]=$row['count'];
					break;
				}
				else{
					$cumulative[$i][2]=0;
				}
			}
			
		}
		
		
		if(sizeof($child_dist_order)>0)
		{
			foreach( $child_dist_order as $row)
			{
				
				if($cci_name[$i]['cci_id']==$row['cci_id'])
				{
					$cumulative[$i][3]=$row['order_cci_dist'];
					break;
				}
				else{
					$cumulative[$i][3]=0;
				}
			}
			
		}
		
		if(sizeof($dist)>0)
		{
			foreach($dist as $row)
			{
				
				if($cci_name[$i]['cci_id']==$row['cci_id'])
				{
					$cumulative[$i][4]=$row['cci_id'];
					break;
				}
				else{
					$cumulative[$i][4]=0;
				}
			}
			
		}
		
		$cumulative[$i][5]=$cumulative[$i][1]+$cumulative[$i][2]+$cumulative[$i][3]+$cumulative[$i][4];
		$tot1+=$cumulative[$i][1];
		$tot2+=$cumulative[$i][2];
		$tot3+=$cumulative[$i][3];
		$tot4+=$cumulative[$i][4];
		
	}
	
	if($roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22 || $roles_id==13 || $roles_id==20 ){
		if(sizeof($cci_dist)>0)
		{
			$cumulative[sizeof($cci_name)][0]=Total;
			$cumulative[sizeof($cci_name)][1]=$tot1;
			$cumulative[sizeof($cci_name)][2]=$tot2;
		}
		
	}
	
	
	return($cumulative);
	
	
}
      
  }
