<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perizinan extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pengendalaian Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('perizinan_model');
    $this->load->helper('date_helper');
	}

  public function beranda(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'perizinan/beranda');
			$data['title'] = $this->judul;
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}
  public function lihat_data_dasar(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'perizinan/lihat_data_dasar');
			$data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function data_dasar(){
		if ($this->session->userdata('username')) {

			$data['isi'] = 'perizinan/data_dasar';
			$data['title'] = $this->judul;
			$kata = array('is_unique' => '<b> "%s" </b> Sudah Digunakan ');
			$this->form_validation->set_rules('no_surat_izin','Nomer Surat Izin','required|is_unique[klinik.no_surat_izin]',$kata);

			if ($this->form_validation->run()) {
				$this->perizinan_model->tambah_data_dasar();
				$this->session->set_flashdata('success_msg', 'User Berhasil Ditambahkan');
        redirect('perizinan/data_dasar');
	    }
			else {
	    	$this->load->view('templates/themes', $data);
	    }
		}
		else{
			redirect('login');
		}
	}


}
