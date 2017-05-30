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

  public function puskesmas_operasional(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/operasional');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_kesesuaian(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/kesesuaian');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_kunjungan(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/kunjungan');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_sanitasi(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/sanitasi');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_sapras(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/sapras');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_medrek(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/medrek');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_tenagakes(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/tenagakes');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_administrasi(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/administrasi');
      $data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }


}
