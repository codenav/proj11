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
    function getLastInserted() {
      return $this->db->insert_id();
    }
    public function tambah_pengawasan(){
      $data = array (
        'id_puskesmas'=> $this->session->userdata('nama_lengkap'),
  			'klinik'=> $this->input->post('no_surat_izin'),
        'tanggal'=> $this->input->post('tgl_mulai_izin'),
  			'periode'=>$this->input->post('periode')
      );
      $this->db->insert('pengawasan', $data);
      //$data['id'] = $this->db->insert_id();
    }

    public function tambah_data_puskesmas_pengawasan($id){
      $data_lokasi = array (
        'id_klinik'=> $id,
        'st_lokasi'=> $this->input->post('lokasi_st_lokasi'),
        'id_puskesmas'=> $id,
        'catatan'=>$this->input->post('lokasi_catatan')
      );

      $this->db->insert('kesesuaian_lokasi_klinik', $data_lokasi);
    }
  }
