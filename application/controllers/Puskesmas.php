<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Puskesmas extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pembinaan Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('penelitian_model');
    $this->load->model('perizinan_model');
    $this->load->model('m_wilayah');
    $this->load->helper('date_helper');
    $this->load->model('puskesmas_model');
    $this->load->helper(array('form', 'url'));
    $this->load->helper('url_helper');

	}

  public function puskesmas_input(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/input');
      $id_pus = $this->session->userdata('nama_lengkap');
      $data['title'] = $this->judul;
      $data['klinik'] = $this->puskesmas_model->get_data_dasar_per($id_pus);
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_daftar_klinik(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/daftar_klinik');
      $id_pus = $this->session->userdata('nama_lengkap');
      $data['title'] = $this->judul;
      $data['admin'] = $this->puskesmas_model->get_data_dasar_per($id_pus);
      //$data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      $data['klinik'] = $this->puskesmas_model->get_data_dasar();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function klnik_tidak_stadart(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/klnik_tidak_stadart');
      $data['title'] = $this->judul;
      //$data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      //$data['klinik'] = $this->puskesmas_model->get_data_dasar();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function bap(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/bap');
      $data['title'] = $this->judul;
      //$data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      $data['admin'] = $this->puskesmas_model->get_data_pengawasan($this->session->userdata('nama_lengkap'));
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
      $data['admin'] = $this->perizinan_model->get_data_dasar_takberizin();
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
      $data['kecamatan']=$this->m_wilayah->get_all_provinsi();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function tambah_takberizin(){
    $this->perizinan_model->tambah_data_takberizin();
    $this->session->set_flashdata('success_msg', 'User Berhasil Ditambahkan');
    redirect('puskesmas/puskesmas_daftar_klinik_takberizin');
  }

  public function puskesmas_pengawasan(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/pengawasan');
      $data['title'] = $this->judul;
      $this->puskesmas_model->tambah_pengawasan();
      $data['id_peng'] = $this->puskesmas_model->getLastInserted();
      $id = $this->puskesmas_model->getLastInserted();
      $data['klinik'] = $this->puskesmas_model->get_data_klinik_per($id);
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function tambah_data_puskesmas_pengawasan(){
    if ($this->session->userdata('username')) {
      $this->puskesmas_model->tambah_data_puskesmas_pengawasan();
      $this->session->set_flashdata('success_msg', 'User Berhasil Ditambahkan');
      redirect('penelitian/lihat');
    }
    else{
      redirect('login');
    }
  }

  public function puskesmas_download(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'puskesmas/download');
      $data['title'] = $this->judul;
      //$data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      $data['admin'] = $this->puskesmas_model->tervalid();
      $data['klinik'] = $this->puskesmas_model->get_data_dasar();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  // public function puskesmas_download(){
  //   if ($this->session->userdata('username')) {
  //     $data = array('isi' => 'puskesmas/download');
  //     $data['title'] = $this->judul;
  //     $data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
  //     $this->load->view('templates/themes', $data);
  //   }
  //   else{
  //     redirect('login');
  //   }
  // }

  public function cetak_klinik_sesuai_standar_excel(){
    if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('perizinan/output_excel',$data);
    }
    else{
      redirect('login');
    }
  }

  public function cetak_excel(){
		if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('perizinan/output_excel',$data);
		}
		else{
			redirect('login');
		}
	}

  public function lokasi_excel($id){
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
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/lokasi_excel',$data);
		}
		else{
			redirect('login');
		}
	}

  public function oprasional_excel(){
    if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/oprasional_excel',$data);
    }
    else{
      redirect('login');
    }
  }

  public function bangunan_excel(){
		if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/bangunan_excel',$data);
		}
		else{
			redirect('login');
		}
	}

  public function raungan_excel(){
    if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/ruangan_excel',$data);
    }
    else{
      redirect('login');
    }
  }

  public function sapras_excel(){
    if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/sapras_excel',$data);
    }
    else{
      redirect('login');
    }
  }
  public function sanitasi_excel(){
		if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/sanitasi_excel',$data);
		}
		else{
			redirect('login');
		}
	}
  public function medrek_excel(){
    if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/medrek_excel',$data);
    }
    else{
      redirect('login');
    }
  }

  public function tenagakesehatan_excel(){
		if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/tenagakesehatan_excel',$data);
		}
		else{
			redirect('login');
		}
	}

  public function administrasi_excel(){
		if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('puskesmas/administrasi_excel',$data);
		}
		else{
			redirect('login');
		}
	}

  public function cetak_laporan_bap($id){
    $data['klinik'] = $this->puskesmas_model->get_data_klinik_per($id);
		$data['lokasi'] = $this->puskesmas_model->get_laporan_lokasi($id);
    $data['operasional'] = $this->puskesmas_model->get_laporan_operasional($id);
    $data['bangunan'] = $this->puskesmas_model->get_laporan_bangunan($id);
    $data['sarana'] = $this->puskesmas_model->get_laporan_sarana($id);
    $data['sanitasi'] = $this->puskesmas_model->get_laporan_sanitasi($id);
    $data['tenaga'] = $this->puskesmas_model->get_laporan_tenaga($id);
    $data['rekam'] = $this->puskesmas_model->get_laporan_rekam($id);
    $data['administrasi'] = $this->puskesmas_model->get_laporan_administrasi($id);

		$html=$this->load->view('puskesmas/laporan_pdf', $data, true);

		$this->load->library('m_pdf_lanscape');
		$pdf = $this->m_pdf_lanscape->load();
		$pdf->WriteHTML($html);
		$pdf->Output('laporan.pdf',I);
	}



}
