
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Navigation_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

  public function getMenuLevel($role_id)
  {

    $this->db->like('role_ids', $role_id);
    $this->db->from('menu');
    $this->db->order_by("order","asc");
    $query = $this->db->get();

    $arrTreeById = array();
    $arrTree = $query->result();


    $objTreeWrapper = new stdClass();//generic empty  class like object
    $objTreeWrapper->arrChilds = array();

    foreach($arrTree AS $row)
    {
        $arrTreeById[$row->id] = $row;
        $row->arrChilds = array();
    }

    foreach($arrTree AS $objItem)
    {
        if (isset($arrTreeById[$objItem->p_id]))   $arrTreeById[$objItem->p_id]->arrChilds[] = $objItem;
        elseif ($objItem->p_id == 0)
        {
            $objTreeWrapper->arrChilds[] = $objItem;
        }
    }

    return $objTreeWrapper;
    //return 1;
  }

  }
