<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Puskesmas extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pengendalaian Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('penelitian_model');
	}

  public function puskesmas_ruangan(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'puskesmas/ruangan');
			$data['title'] = $this->judul;
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function puskesmas_bangunan(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/bangunan');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }
}
