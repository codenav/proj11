<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
<<<<<<< HEAD
class Perizinan extends CI_Controller {
=======
class Kadinkes extends CI_Controller {
>>>>>>> f1b865d297e2aac7b906422202f27383d2a3d2d5

  public $judul = "Sistem Informasi Pengawasan dan Pengendalaian Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('penelitian_model');
	}

<<<<<<< HEAD
  public function beranda(){
=======
  public function perizinan(){
>>>>>>> f1b865d297e2aac7b906422202f27383d2a3d2d5
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'perizinan/beranda');
			$data['title'] = $this->judul;
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}
<<<<<<< HEAD


=======
>>>>>>> f1b865d297e2aac7b906422202f27383d2a3d2d5
}
