<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Yankes extends CI_Controller {

  public $judul = "Sistem Informasi Pengawasan dan Pembinaan Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
    $this->load->model('yankes_model');
	}

  public function user_klinik(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'admin/user_klinik');
			$data['title'] = $this->judul;
			$data['admin'] = $this->admin_model->get_user_klinik();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function beranda(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'yankes/beranda');
			$data['title'] = $this->judul;
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function klinik(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'yankes/klinik');
      $data['title'] = $this->judul;
      $data['admin'] = $this->admin_model->get_user_klinik();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }
  public function tambah_user_klinik(){
    if ($this->session->userdata('username')) {

      $data['isi'] = 'admin/tambah_user_klinik';
      $data['title'] = $this->judul;
      $kata = array('is_unique' => '<b> "%s" </b> Sudah Digunakan ');
      $this->form_validation->set_rules('username','Username','required|is_unique[admin.username]',$kata);

      if ($this->form_validation->run()) {
        $this->admin_model->tambah_user_klinik();
        $this->session->set_flashdata('success_msg', 'User Berhasil Ditambahkan');
        redirect('admin/user_klinik');
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
