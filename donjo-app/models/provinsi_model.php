<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Provinsi_Model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function list_data(){
    $data = $this->db->select('*')->from('provinsi')
      ->order_by('nama')->get()->result_array();
    return $data;
  }
}