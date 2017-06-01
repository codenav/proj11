<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Klinik extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pengendalaian Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('penelitian_model');
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


}
