<?php
  class Puskesmas_model extends CI_Model {

    public function __construct(){
      $this->load->database();
    }

    public function get_data_dasar(){
  		$this->db->select("*");
  		$this->db->from("klinik");
  		$query = $this->db->get();
  			if ($query->num_rows() >0){
  				foreach ($query->result() as $data) {
  					$namaklinik[] = $data;
  				}
  			return $namaklinik;
  			}
  	}

    public function get_data_dasar_per($id_pus){
  		$this->db->select("*");
  		$this->db->from("klinik");
      $this->db->where("puskesmas", $id_pus);
  		$query = $this->db->get();
  			if ($query->num_rows() >0){
  				foreach ($query->result() as $data) {
  					$namaklinik[] = $data;
  				}
  			return $namaklinik;
  			}
  	}
  }
