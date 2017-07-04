<?php
class Perizinan_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}

  public function tambah_data_dasar(){
		//cekbox
			if(!empty($this->input->post('hobi'))){
				$hobinya='';
				$hobi_dipilih= $this->input->post('hobi');
				for($b=0;$b<count($this->input->post('hobi'));$b++){
					$hobinya=$hobinya.$hobi_dipilih[$b].',';
					$hobi_to_sql=substr(strrev($hobinya),1);
				}
			} else {
				$hobi_to_sql = '';
			}

				if ( (date("Y-m-d") >= date("Y-01-01")) && (date("Y-m-d") <= date("Y-06-31"))) {
					$periode = "1";
				} else {
					$periode = "2";
				}

    $data = array (
      'no_surat_izin'=> $this->input->post('no_surat_izin'),
			'nama'=> $this->input->post('nama'),
      'tgl_mulai_izin'=> date("Y-m-d"),
			'periode'=> $periode,
			'status'=> "berizin",
      'alamat'=> $this->input->post('alamat'),
      'rt'=> $this->input->post('rt'),
      'rw'=> $this->input->post('rw'),
      'telp'=> $this->input->post('telp'),
      'kecamatan'=> $this->input->post('kecamatan'),
      'kelurahan'=> $this->input->post('kelurahan'),
			'puskesmas'=> $this->input->post('puskesmas'),
      'penanggun_jawab'=> $this->input->post('penanggun_jawab'),
      'jenis_klinik'=> "pratama",
      'milik'=> $this->input->post('milik'),
      'jenis_layanan'=> $hobi_to_sql

    );

    $this->db->insert('klinik', $data);
  }

	public function tambah_data_takberizin(){
		//cekbox
			if(!empty($this->input->post('hobi'))){
				$hobinya='';
				$hobi_dipilih= $this->input->post('hobi');
				for($b=0;$b<count($this->input->post('hobi'));$b++){
					$hobinya=$hobinya.$hobi_dipilih[$b].',';
					$hobi_to_sql=substr(strrev($hobinya),1);
				}
			} else {
				$hobi_to_sql = '';
			}

				if ( (date("Y-m-d") >= date("Y-01-01")) && (date("Y-m-d") <= date("Y-06-31"))) {
					$periode = "1";
				} else {
					$periode = "2";
				}

    $data = array (
      'no_surat_izin'=> $this->input->post('no_surat_izin'),
			'nama'=> $this->input->post('nama'),
      'tgl_mulai_izin'=> date("Y-m-d"),
			'periode'=> $periode,
			'status'=> "tidak_berizin",
      'alamat'=> $this->input->post('alamat'),
      'rt'=> $this->input->post('rt'),
      'rw'=> $this->input->post('rw'),
      'telp'=> $this->input->post('telp'),
      'kecamatan'=> $this->input->post('kecamatan'),
      'kelurahan'=> $this->input->post('kelurahan'),
			'puskesmas'=> $this->input->post('puskesmas'),
      'penanggun_jawab'=> $this->input->post('penanggun_jawab'),
      'jenis_klinik'=> "pratama",
      'milik'=> $this->input->post('milik'),
      'jenis_layanan'=> $hobi_to_sql

    );

    $this->db->insert('klinik', $data);
  }

	public function get_data_dasar(){
		$this->db->select("*");
		$this->db->from("klinik");
		$this->db->order_by("no_surat_izin","asc");
		$query = $this->db->get();
			if ($query->num_rows() >0){
				foreach ($query->result() as $data) {
					$penelitian[] = $data;
				}
			return $penelitian;
			}
	}



	public function get_data_dasar_tervalidasi(){
		$this->db->select("*");
		$this->db->from("klinik");
		$this->db->where("status", "berizin");
		$this->db->order_by("no_surat_izin","asc");
		$query = $this->db->get();
			if ($query->num_rows() >0){
				foreach ($query->result() as $data) {
					$penelitian[] = $data;
				}
			return $penelitian;
			}
	}

	public function get_data_dasar_takberizin(){
		$this->db->select("*");
		$this->db->from("klinik");
		$this->db->where('status', "tidak_berizin");
		$this->db->order_by("no_surat_izin","asc");
		$query = $this->db->get();
			if ($query->num_rows() >0){
				foreach ($query->result() as $data) {
					$penelitian[] = $data;
				}
			return $penelitian;
			}
	}

}
