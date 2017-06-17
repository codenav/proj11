<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Klinik extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pembinaan Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('penelitian_model');
    $this->load->model('perizinan_model');
	}

  public function beranda(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'klinik/beranda');
			$data['title'] = $this->judul;
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}
  public function lihat_data(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'klinik/lihat_data');
      $data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      $data['klinik'] = $this->puskesmas_model->get_data_dasar();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }
}
