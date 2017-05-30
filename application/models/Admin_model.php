<?php
  class Admin_model extends CI_Model {

    public function __construct(){
      $this->load->database();
    }

    public function get_admin(){
      $this->db->select("*");
      $this->db->from("admin");
      $this->db->order_by("id_admin","asc");
      $query = $this->db->get();
        if ($query->num_rows() >0){
          foreach ($query->result() as $data) {
            $penelitian[] = $data;
          }
        return $penelitian;
        }
    }

    public function get_admin_id($id = FALSE){
      $this->db->select("*");
      $this->db->from("admin");
      $this->db->where('id_admin', $id);
      $query = $this->db->get();
      return $query->row_array();
    }

    public function update_admin($id){
      $this->load->helper('url');
      $defpas = $this->input->post('password');

      if ($defpas == '') {
        $data = array (
          'nama_lengkap'=> $this->input->post('nama_lengkap'),
          'alamat'=> $this->input->post('alamat'),
          'tanggal_lahir'=> $this->input->post('tanggal_lahir'),
          'email'=> $this->input->post('email'),
          'username'=> $this->input->post('username'),

        );
      } else {
        $password = password_hash($defpas, PASSWORD_DEFAULT);
        $data = array (
          'nama_lengkap'=> $this->input->post('nama_lengkap'),
          'alamat'=> $this->input->post('alamat'),
          'tanggal_lahir'=> $this->input->post('tanggal_lahir'),
          'email'=> $this->input->post('email'),
          'username'=> $this->input->post('username'),
          'password'=> $password,
        );
      }

      $this->db->where('id_admin', $id);
      $this->db->update('admin', $data);
    }

    public function set_admin(){
      $defpas = $this->input->post('password');
      $password = password_hash($defpas, PASSWORD_DEFAULT);

      $data = array (
        'nama_lengkap'=> $this->input->post('nama_lengkap'),
        'alamat'=> $this->input->post('alamat'),
        'email'=> $this->input->post('email'),
        'username'=> $this->input->post('username'),
        'password'=> $password,
        'akses'=> $this->input->post('akses')
      );

      $this->db->insert('admin', $data);
    }

    public function delete_admin($id){
      $this->db->delete('admin', array('id_admin'=>$id));
    }

    // ================================================================

    public function tambah_user_puskesmas(){
      $defpas = $this->input->post('password');
      $password = password_hash($defpas, PASSWORD_DEFAULT);

      $data = array (
        'nama_lengkap'=> $this->input->post('nama_lengkap'),
        'alamat'=> $this->input->post('alamat'),
        'email'=> $this->input->post('email'),
        'username'=> $this->input->post('username'),
        'password'=> $password,
        'akses'=> "puskesmas"
      );

      $this->db->insert('admin', $data);
    }

    public function tambah_user_klinik(){
      $defpas = $this->input->post('password');
      $password = password_hash($defpas, PASSWORD_DEFAULT);

      $data = array (
        'nama_lengkap'=> $this->input->post('nama_lengkap'),
        'alamat'=> $this->input->post('alamat'),
        'email'=> $this->input->post('email'),
        'username'=> $this->input->post('username'),
        'password'=> $password,
        'akses'=> "klinik"
      );

      $this->db->insert('admin', $data);
    }

    public function tambah_user_yankes(){
      $defpas = $this->input->post('password');
      $password = password_hash($defpas, PASSWORD_DEFAULT);

      $data = array (
        'nama_lengkap'=> $this->input->post('nama_lengkap'),
        'alamat'=> $this->input->post('alamat'),
        'email'=> $this->input->post('email'),
        'username'=> $this->input->post('username'),
        'password'=> $password,
        'akses'=> "yankes"
      );

      $this->db->insert('admin', $data);
    }

    public function tambah_user_kadinkes(){
      $defpas = $this->input->post('password');
      $password = password_hash($defpas, PASSWORD_DEFAULT);

      $data = array (
        'nama_lengkap'=> $this->input->post('nama_lengkap'),
        'alamat'=> $this->input->post('alamat'),
        'email'=> $this->input->post('email'),
        'username'=> $this->input->post('username'),
        'password'=> $password,
        'akses'=> "kadinkes"
      );

      $this->db->insert('admin', $data);
    }

    public function get_user_puskesmas(){
      $this->db->select("*");
      $this->db->from("admin");
      $this->db->where("akses", "puskesmas");
      $this->db->order_by("id_admin","asc");
      $query = $this->db->get();
        if ($query->num_rows() >0){
          foreach ($query->result() as $data) {
            $penelitian[] = $data;
          }
        return $penelitian;
        }
    }

    public function get_user_klinik(){
      $this->db->select("*");
      $this->db->from("admin");
      $this->db->where("akses", "klinik");
      $this->db->order_by("id_admin","asc");
      $query = $this->db->get();
        if ($query->num_rows() >0){
          foreach ($query->result() as $data) {
            $penelitian[] = $data;
          }
        return $penelitian;
        }
    }

    public function get_user_yankes(){
      $this->db->select("*");
      $this->db->from("admin");
      $this->db->where("akses", "yankes");
      $this->db->order_by("id_admin","asc");
      $query = $this->db->get();
        if ($query->num_rows() >0){
          foreach ($query->result() as $data) {
            $penelitian[] = $data;
          }
        return $penelitian;
        }
    }

    public function get_user_kadinkes(){
      $this->db->select("*");
      $this->db->from("admin");
      $this->db->where("akses", "kadinkes");
      $this->db->order_by("id_admin","asc");
      $query = $this->db->get();
        if ($query->num_rows() >0){
          foreach ($query->result() as $data) {
            $penelitian[] = $data;
          }
        return $penelitian;
        }
    }




}
