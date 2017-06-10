<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Puskesmas extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pengendalaian Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('penelitian_model');
    $this->load->model('perizinan_model');
    $this->load->helper('date_helper');
    $this->load->model('puskesmas_model');


	}

  public function puskesmas_input(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/input');
      $id_pus = $this->session->userdata('nama_lengkap');
      $data['title'] = $this->judul;
      $data['klinik'] = $this->puskesmas_model->get_data_dasar($id_pus);
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_daftar_klinik(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/daftar_klinik');
      $data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      $data['klinik'] = $this->puskesmas_model->get_data_dasar();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }
  public function puskesmas_daftar_klinik_takberizin(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/daftar_klinik_takberizin');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }
  public function puskesmas_tambah_klinik_takberizin(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/tambah_klinik_takberizin');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }
  public function puskesmas_pengawasan(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/pengawasan');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }
  public function puskesmas_download(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/download');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }



}
