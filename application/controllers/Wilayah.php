<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Wilayah extends CI_Controller {

		public $judul = "Sistem Informasi Pengawasan dan Pengendalaian Klinik oleh Puskemas";

		function __construct() {
			parent::__construct();

			$this->load->helper(array('url','html'));
			$this->load->model('m_wilayah');
			$this->load->database();
		}

		function coba_coba() {

			$data = array('isi' => 'perizinan/data_dasar');
			$data['title'] = $this->judul;
			$data['kecamatan']=$this->m_wilayah->get_all_provinsi();

			$this->load->view('templates/themes', $data);


			 //$this->load->view('perizinan/wilayah', $data);
		}


		function add_ajax_des($id_kec){
		    $query = $this->db->get_where('kelurahan',array('id_kec'=>$id_kec));
		    $data = "<option disabled selected> Pilih Kelurahan </option>";
		    foreach ($query->result() as $value) {
		        $data .= "<option value='".$value->id_kel."'>".$value->nama."</option>";
		    }
		    echo $data;
		}

		function add_ajax_pus($id_kel){
		    $query = $this->db->get_where('puskesmas',array('id_kel'=>$id_kel));
		    $data = "<option disabled> Pilih Puskesmas </option>";
		    foreach ($query->result() as $value) {
		        $data .= "<option value='".$value->id_puskesmas."'>".$value->puskesmas."</option>";
		    }
		    echo $data;
		}
	}
?>
