<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }


	public function getKec()
	{
	  $sql="SELECT * FROM kecamatan WHERE id_kab=3273 ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->result();
	}

	public function getKel($id_kec)
	{
	  $sql="SELECT * FROM kelurahan WHERE id_kec={$id_kec} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->result();
	}

  function getRecord($sql) {
       $query = $this->db->query($sql);
       return $query;
   }
}
