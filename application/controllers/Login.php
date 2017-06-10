<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	public $judul = "Sistem Informasi Pengawasan dan Pembinaan Klinik oleh Puskemas";

	function __construct() {
		parent::__construct();
		$this->load->model('login_model');
	}

	function index() {
		$data=array('isi' =>'admin/login');
		$data['title'] = $this->judul;
		$this->load->view('templates/themes_login', $data);
	}

	function validasi() {

		$pas = $this->input->post('password');
		$user = $this->input->post('username');

		$admin = $this->login_model->ambil_data($user);

		if ($admin > 0) {
			foreach ($admin as $baru) {
				$hash_pas = $baru->password;
				$hak_akses = $baru->akses;
				$nama_lengkap = $baru->nama_lengkap;
			}
		}else {
			$hash_pas = '';
			$hak_akses = '';
			$nama_lengkap = '';
		}

		$newdata = array(
			'username'  => $user,
      'akses'     => $hak_akses,
			'nama_lengkap'     => $nama_lengkap
		);

 		if (password_verify($pas, $hash_pas)) {
			$sesi=$this->session->set_userdata($newdata);
			$this->session->set_flashdata('success_msg', 'Selamat Datang, '.$newdata['username'].'!');
			if ($hak_akses =="super_admin") {
				redirect('admin/beranda');
			}elseif ($hak_akses =="admin_datin") {
				redirect('penelitian/lihat');
			}elseif ($hak_akses =="admin_pkl") {
				redirect('pkl/lihat');
			}
			elseif ($hak_akses == "puskesmas") {
				redirect('penelitian/lihat');
			}
			elseif ($hak_akses == "kadinkes") {
				redirect('kadinkes/beranda');
			}elseif ($hak_akses == "perizinan") {
				redirect('perizinan/beranda');
			}
			elseif ($hak_akses == "yankes") {
				redirect('yankes/beranda');
			}
			elseif ($hak_akses == "klinik") {
				redirect('klinik/beranda');
			}
		}else {

			$this->session->set_flashdata('fail', 'Username atau Password Salah!');
			$data=array('isi' =>'admin/login');
			$data['title'] = $this->judul;
			$this->load->view('templates/themes_login', $data);
 		}
		}

	function logout() {
		session_destroy();
		redirect('login');
	}
}
