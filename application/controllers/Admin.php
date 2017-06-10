<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
	}

	public $judul = "Sistem Informasi Pengawasan Dan Pembinaan Klinik Oleh Puskemas";

  public function view(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'admin/lihat');
			$data['title'] = $this->judul;
      $data['admin'] = $this->admin_model->get_admin();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

	public function beranda(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'admin/beranda');
			$data['title'] = $this->judul;
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

	public function user_puskesmas(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'admin/user_puskesmas');
			$data['title'] = $this->judul;
			$data['admin'] = $this->admin_model->get_user_puskesmas();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
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

	public function user_perizinan(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'admin/user_perizinan');
			$data['title'] = $this->judul;
			$data['admin'] = $this->admin_model->get_user_perizinan();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

	public function user_yankes(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'admin/user_yankes');
			$data['title'] = $this->judul;
			$data['admin'] = $this->admin_model->get_user_yankes();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

	public function user_kadinkes(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'admin/user_kadinkes');
			$data['title'] = $this->judul;
			$data['admin'] = $this->admin_model->get_user_kadinkes();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

	public function tambah_user_puskesmas(){
		if ($this->session->userdata('username')) {

			$data['isi'] = 'admin/tambah_user_puskesmas';
			$data['title'] = $this->judul;
			$kata = array('is_unique' => '<b> "%s" </b> Sudah Digunakan ');
			$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]',$kata);

			if ($this->form_validation->run()) {
				$this->admin_model->tambah_user_puskesmas();
				$this->session->set_flashdata('success_msg', 'User Berhasil Ditambahkan');
        redirect('admin/user_puskesmas');
	    }
			else {
				$data['puskes'] = $this->admin_model->get_data_puskesmas();
	    	$this->load->view('templates/themes', $data);
	    }
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

	public function tambah_user_perizinan(){
		if ($this->session->userdata('username')) {

			$data['isi'] = 'admin/tambah_user_perizinan';
			$data['title'] = $this->judul;
			$kata = array('is_unique' => '<b> "%s" </b> Sudah Digunakan ');
			$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]',$kata);

			if ($this->form_validation->run()) {
				$this->admin_model->tambah_user_perizinan();
				$this->session->set_flashdata('success_msg', 'User Berhasil Ditambahkan');
        redirect('admin/user_perizinan');
	    }
			else {
	    	$this->load->view('templates/themes', $data);
	    }
		}
		else{
			redirect('login');
		}
	}

	public function tambah_user_kadinkes(){
		if ($this->session->userdata('username')) {

			$data['isi'] = 'admin/tambah_user_kadinkes';
			$data['title'] = $this->judul;
			$kata = array('is_unique' => '<b> "%s" </b> Sudah Digunakan ');
			$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]',$kata);

			if ($this->form_validation->run()) {
				$this->admin_model->tambah_user_kadinkes();
				$this->session->set_flashdata('success_msg', 'User Berhasil Ditambahkan');
        redirect('admin/user_kadinkes');
	    }
			else {
	    	$this->load->view('templates/themes', $data);
	    }
		}
		else{
			redirect('login');
		}
	}

	public function tambah_user_yankes(){
		if ($this->session->userdata('username')) {

			$data['isi'] = 'admin/tambah_user_yankes';
			$data['title'] = $this->judul;
			$kata = array('is_unique' => '<b> "%s" </b> Sudah Digunakan ');
			$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]',$kata);

			if ($this->form_validation->run()) {
				$this->admin_model->tambah_user_yankes();
				$this->session->set_flashdata('success_msg', 'User Berhasil Ditambahkan');
        redirect('admin/user_yankes');
	    }
			else {
	    	$this->load->view('templates/themes', $data);
	    }
		}
		else{
			redirect('login');
		}
	}

	public function delete_kadinkes($id){
    $this->admin_model->delete_admin($id);
		$this->session->set_flashdata('success_msg', 'Data Berhasil Di Hapus');
    redirect('admin/user_kadinkes');
  }
	public function delete_perizinan($id){
    $this->admin_model->delete_admin($id);
		$this->session->set_flashdata('success_msg', 'Data Berhasil Di Hapus');
    redirect('admin/user_perizinan');
  }
	public function delete_klinik($id){
    $this->admin_model->delete_admin($id);
		$this->session->set_flashdata('success_msg', 'Data Berhasil Di Hapus');
    redirect('admin/user_klinik');
  }
	public function delete_puskesmas($id){
    $this->admin_model->delete_admin($id);
		$this->session->set_flashdata('success_msg', 'Data Berhasil Di Hapus');
    redirect('admin/user_puskesmas');
  }
	public function delete_yankes($id){
    $this->admin_model->delete_admin($id);
		$this->session->set_flashdata('success_msg', 'Data Berhasil Di Hapus');
    redirect('admin/user_yankes');
  }

	public function update_user_puskesmas($id){
		if ($this->session->userdata('username')) {
			$data['isi'] = 'admin/update_user_puskesmas';
			$data['title'] = $this->judul;
			$this->form_validation->set_rules('username','Username','required');

			if ($this->form_validation->run() === FALSE) {
				$data['news_item'] = $this->admin_model->get_admin_id($id);
				$this->load->view('templates/themes', $data);
			}else {
				$this->admin_model->update_admin($id);
				$this->session->set_flashdata('success_msg', 'Data Berhasil Di Perbaharui');
				redirect('admin/user_puskesmas');
			}
		}
		else{
			redirect('login');
		}
	}

	public function update_user_yankes($id){
		if ($this->session->userdata('username')) {
			$data['isi'] = 'admin/update_user_yankes';
			$data['title'] = $this->judul;
			$this->form_validation->set_rules('username','Username','required');

			if ($this->form_validation->run() === FALSE) {
				$data['news_item'] = $this->admin_model->get_admin_id($id);
				$this->load->view('templates/themes', $data);
			}else {
				$this->admin_model->update_admin($id);
				$this->session->set_flashdata('success_msg', 'Data Berhasil Di Perbaharui');
				redirect('admin/user_yankes');
			}
		}
		else{
			redirect('login');
		}
	}

	public function update_user_perizinan($id){
		if ($this->session->userdata('username')) {
			$data['isi'] = 'admin/update_user_perizinan';
			$data['title'] = $this->judul;
			$this->form_validation->set_rules('username','Username','required');

			if ($this->form_validation->run() === FALSE) {
				$data['news_item'] = $this->admin_model->get_admin_id($id);
				$this->load->view('templates/themes', $data);
			}else {
				$this->admin_model->update_admin($id);
				$this->session->set_flashdata('success_msg', 'Data Berhasil Di Perbaharui');
				redirect('admin/user_perizinan');
			}
		}
		else{
			redirect('login');
		}
	}

	public function update_user_klinik($id){
		if ($this->session->userdata('username')) {
			$data['isi'] = 'admin/update_user_klinik';
			$data['title'] = $this->judul;
			$this->form_validation->set_rules('username','Username','required');

			if ($this->form_validation->run() === FALSE) {
				$data['news_item'] = $this->admin_model->get_admin_id($id);
				$this->load->view('templates/themes', $data);
			}else {
				$this->admin_model->update_admin($id);
				$this->session->set_flashdata('success_msg', 'Data Berhasil Di Perbaharui');
				redirect('admin/user_klinik');
			}
		}
		else{
			redirect('login');
		}
	}

	public function update_user_kadinkes($id){
		if ($this->session->userdata('username')) {
			$data['isi'] = 'admin/update_user_kadinkes';
			$data['title'] = $this->judul;
			$this->form_validation->set_rules('username','Username','required');

			if ($this->form_validation->run() === FALSE) {
				$data['news_item'] = $this->admin_model->get_admin_id($id);
				$this->load->view('templates/themes', $data);
			}else {
				$this->admin_model->update_admin($id);
				$this->session->set_flashdata('success_msg', 'Data Berhasil Di Perbaharui');
				redirect('admin/user_kadinkes');
			}
		}
		else{
			redirect('login');
		}
	}


// ==============================================================================
  public function tambah(){
		if ($this->session->userdata('username')) {

			$data['isi'] = 'admin/tambah';
			$data['title'] = $this->judul;
			$kata = array('is_unique' => '<b> "%s" </b> Sudah Digunakan ');
			$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]',$kata);

			if ($this->form_validation->run()) {
				$this->admin_model->set_admin();
				$this->session->set_flashdata('success_msg', 'Admin Berhasil Ditambahkan');
        redirect('admin/lihat');
	    }
			else {
	    	$this->load->view('templates/themes', $data);
	    }
		}
		else{
			redirect('login');
		}
	}

	public function update($id){
		if ($this->session->userdata('username')) {
			$data['isi'] = 'admin/update';
			$data['title'] = $this->judul;
			$this->form_validation->set_rules('username','Username','required');

			if ($this->form_validation->run() === FALSE) {
				$data['news_item'] = $this->admin_model->get_admin_id($id);
				$this->load->view('templates/themes', $data);
			}else {
				$this->admin_model->update_admin($id);
				$this->session->set_flashdata('success_msg', 'Data Berhasil Di Perbaharui');
				redirect('admin/lihat');
			}
		}
		else{
			redirect('login');
		}
	}

	public function delete($id){
    $this->admin_model->delete_admin($id);
		$this->session->set_flashdata('success_msg', 'Data Berhasil Di Hapus');
    redirect('admin/lihat');
  }

}
