<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Klinik extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pembinaan Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('penelitian_model');
    $this->load->model('perizinan_model');
      $this->load->model('puskesmas_model');
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
  public function output_klinik($id){
		if ($this->session->userdata('username')) {
      $data['klinik'] = $this->puskesmas_model->get_data_klinik_per($id);
      $data['lokasi'] = $this->puskesmas_model->get_laporan_lokasi($id);
      $data['operasional'] = $this->puskesmas_model->get_laporan_operasional($id);
      $data['bangunan'] = $this->puskesmas_model->get_laporan_bangunan($id);
      $data['sarana_prasarana'] = $this->puskesmas_model->get_laporan_sarana($id);
      $data['sanitasi'] = $this->puskesmas_model->get_laporan_sanitasi($id);
      $data['tenaga_kesehatan'] = $this->puskesmas_model->get_laporan_tenaga($id);
      $data['rekam_medik'] = $this->puskesmas_model->get_laporan_rekam($id);
      $data['ruangan'] = $this->puskesmas_model->get_laporan_ruangan($id);
      $data['administrasi'] = $this->puskesmas_model->get_laporan_administrasi($id);
      // $data['excel'] = $this->perizinan_model->get_data_dasar();
      // $data['lokasi'] = $this->puskesmas_model->get_data_lokasi();
      // $data['oprasional'] = $this->puskesmas_model->get_data_oprasional();
      // $data['bangunan'] = $this->puskesmas_model->get_data_bangunan();
      // $data['ruangan'] = $this->puskesmas_model->get_data_ruangan();
      // $data['sarana_prasarana'] = $this->puskesmas_model->get_data_sarana_prasarana();
      // $data['sanitasi'] = $this->puskesmas_model->get_data_sanitasi();
      // $data['rekam_medik'] = $this->puskesmas_model->get_data_rekam_medik();
      // $data['tenaga_kesehatan'] = $this->puskesmas_model->get_data_tenaga_kesehatan();
      // $data['administrasi'] = $this->puskesmas_model->get_data_administrasi();
      $this->load->view('klinik/output_klinik',$data);
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

  public function lihat(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'klinik/lihat');
			$data['title'] = $this->judul;
      $data['admin'] = $this->puskesmas_model->get_data_pengawasan_all();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}


}
