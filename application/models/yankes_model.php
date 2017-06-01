<?php
  class Yankes_model extends CI_Model {

    public function __construct(){
      $this->load->database();
    }

    public function yankes(){
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

}
