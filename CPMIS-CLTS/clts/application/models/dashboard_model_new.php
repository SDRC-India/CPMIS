
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
      	$this->load->model('dashboard_model');
      	$ses_ids=$this->session->userdata('login_user_id');
      	$role=$this->dashboard_model->get_role_id($ses_ids);
      	foreach($role as $rolep):
      	$roles_id=$rolep['account_role_id'];
      	$dist_id=$rolep['district_id'];
      	$stat_id=$rolep['state_id'];
      	endforeach;
      	$newdistrict= $this->db->query("select  division_id from division_details  where division_details.district_id='" . $dist_id ."' ")->result_array();
      	$from='2014-04-01';
      	$to='2017-10-03';
      	//echo $roles_id;
      	foreach($newdistrict as $newdistricts):
      	$division_id=$newdistricts['division_id'];
      	endforeach;
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==22)//For LC and LC Operator
      	{
      		$child_dist =$this->db->query("select area_name,area_id from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();
      		
      		//echo "select sum(d1<10 or year<10) as num_child,area_id from (select y.area_id,floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob)))/365 as d1,x.year, y.area_name from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and (isdob='Yes' and (floor(DATEDIFF(DATE(idate_of_rescue) , DATE(dob))/365) <10) or (isdob='No' and year <10)) where y.parent_id ='IND010' AND STR_TO_DATE(x.idate_of_rescue,'%Y-%m-%d') BETWEEN  '".$from."' AND '".$to."' )Z group by area_name order by area_name" ;
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
      	
      	$cumulative1 = array();
      	$cumulative = array();
      	for($i=0; $i<sizeof($child_dist); $i++){
      		$cumulative1[$i][0]=$child_dist[$i]['area_name'];
      		$cumulative1[$i][1]=0;
      		$cumulative1[$i][2]=0;
      		$cumulative1[$i][3]=0;
      		$cumulative1[$i][4]=0;
      		
      		
      		if(sizeof($child_b10)>0)
      		{
      			
      			foreach($child_b10 as $row)
      			{
      				
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					
      					
      					$cumulative1[$i][1]=$row['num_child'];
      					
      					break;
      				}
      				else{
      					$cumulative1[$i][1]=0;
      				}
      			}
      			
      		}
      		
      		if(sizeof($child_b14)>0)
      		{
      			foreach($child_b14 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative1[$i][2]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative1[$i][2]=0;
      				}
      			}
      			
      		}
      		
     		
      		if(sizeof($child_b15)>0)
      		{
      			foreach($child_b15 as $row)
      			{
      				if($child_dist[$i]['area_id']==$row['area_id'])
      				{
      					$cumulative1[$i][3]=$row['num_child'];
      					break;
      				}
      				else{
      					$cumulative1[$i][3]=0;
      				}
      			}
      			
      		}
      		
      		
      		//$cumulative[$i][4]=$child_bnot[$i]['num_child']<>NULL ? $child_bnot[$i]['num_child'] : 0;
      		$tot1+=$cumulative1[$i][1];
      		$tot2+=$cumulative1[$i][2];
      		$tot3+=$cumulative1[$i][3];
      	}
      	
      	if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12 || $roles_id==13 || $roles_id==20 || $roles_id==22){
      		
      		$cumulative[sizeof($child_dist)][0]="<strong>Total</strong>";
      		$cumulative[sizeof($child_dist)][1]="<strong>".$tot1."<strong>";
      		$cumulative[sizeof($child_dist)][2]="<strong>".$tot2."<strong>";
      		$cumulative[sizeof($child_dist)][3]="<strong>".$tot3."<strong>";
      		
      		
      		
      	}
      	
      	
      	return ($cumulative);
      	//echo json_encode($cumulative);
      }
      




  }
