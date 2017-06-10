<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kadinkes extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pembinaan Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
    $this->load->model('perizinan_model');
    $this->load->helper('date_helper');
	}

  public function beranda(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'kadinkes/beranda');
			$data['title'] = $this->judul;
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function lihat_klinik(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'kadinkes/lihat_klinik');
			$data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function lihat_klinik_takberizin(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'kadinkes/lihat_klinik_takberizin');
			$data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar_takberizin();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function lihat_klinik_tervalidasi(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'kadinkes/lihat_klinik_tervalidasi');
      $data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }


}
