<?php
  class Puskesmas_model extends CI_Model {

    public function __construct(){
      $this->load->database();
    }

    public function get_laporan_lokasi($id){
      $this->db->select("*");
      $this->db->from("kesesuaian_lokasi_klinik");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }
    public function get_laporan_ruangan($id){
      $this->db->select("*");
      $this->db->from("ruangan");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_laporan_operasional($id){
      $this->db->select("*");
      $this->db->from("operasional");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_laporan_bangunan($id){
      $this->db->select("*");
      $this->db->from("bangunan");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_laporan_sarana($id){
      $this->db->select("*");
      $this->db->from("sarana_prasarana");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_laporan_sanitasi($id){
      $this->db->select("*");
      $this->db->from("sanitasi");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_laporan_tenaga($id){
      $this->db->select("*");
      $this->db->from("tenaga_kesehatan");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_laporan_rekam($id){
      $this->db->select("*");
      $this->db->from("rekam_medik");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_laporan_administrasi($id){
      $this->db->select("*");
      $this->db->from("administrasi");
      $this->db->where("id_pengawasan", $id);
      $query = $this->db->get();
      return $query->result();
    }



    public function get_data_dasar(){
  		$this->db->select("*");
  		$this->db->from("klinik");
  		$query = $this->db->get();
  			if ($query->num_rows() >0){
  				foreach ($query->result() as $data) {
  					$namaklinik[] = $data;
  				}
  			return $namaklinik;
  			}
  	}

    public function get_data_dasar_per($id_pus){
  		$this->db->select("*");
  		$this->db->from("klinik");
      $this->db->where("puskesmas", $id_pus);
  		$query = $this->db->get();
  			if ($query->num_rows() >0){
  				foreach ($query->result() as $data) {
  					$namaklinik[] = $data;
  				}
  			return $namaklinik;
  			}
  	}
    function getLastInserted() {
      return $this->db->insert_id();
    }
    public function tambah_pengawasan(){
      $data = array (
        'id_puskesmas'=> $this->session->userdata('nama_lengkap'),
  			'klinik'=> $this->input->post('no_surat_izin'),
        'tanggal'=> $this->input->post('tgl_mulai_izin'),
  			'periode'=>$this->input->post('periode')
      );
      $this->db->insert('pengawasan', $data);
      //$data['id'] = $this->db->insert_id();
    }

    public function tambah_data_puskesmas_pengawasan(){

      $id_pengawasan = $this->input->post('id_peng');

      $data_lokasi = array (
        'id_pengawasan'=> $id_pengawasan,
        'st_lokasi'=> $this->input->post('lokasi_st_lokasi'),
        'catatan'=> $this->input->post('lokasi_catatan')
      );
      $this->db->insert('kesesuaian_lokasi_klinik', $data_lokasi);

      $data_operasional = array (
        'id_pengawasan'=> $id_pengawasan,
        'st_beroprasi'=> $this->input->post('operasional_st_beroperasi'),
        'st_plat'=> $this->input->post('operasional_st_plat'),
        'st_kesesuaian_jenis_ijin_operasional'=> $this->input->post('operasional_st_kesesuaian'),
        'catatan'=> $this->input->post('operasional_catatan')
      );
      $this->db->insert('operasional', $data_operasional);

      $data_bangunan = array (
        'id_pengawasan'=> $id_pengawasan,
        'st_bangunan_permanen'=> $this->input->post('bangunan_permanen'),
        'bangunan_bergabung_fisik'=> $this->input->post('bangunan_bergabung'),
        'ctt_dan_saran_bangunan'=> $this->input->post('bangunan_catatan'),
      );
      $this->db->insert('bangunan', $data_bangunan);

      $data_ruangan = array (
        'id_pengawasan'=> $id_pengawasan,
        'ruang_konsul'=> $this->input->post('ruangan_konsultasi'),
        'ruang_admin'=> $this->input->post('ruangan_administrasi'),
        'ruang_obat'=> $this->input->post('ruangan_obat'),
        'ruang_tindakan'=> $this->input->post('ruangan_tindakan'),
        'ruang_asi'=> $this->input->post('ruangan_asi'),
        'ruang_mandi'=> $this->input->post('ruangan_mandi'),
        'keterangan'=> $this->input->post('ruangan_catatan')
      );
        $this->db->insert('ruangan', $data_ruangan);

      $data_sarana = array (
        'id_pengawasan'=> $id_pengawasan,
        'instalasi_listrik'=> $this->input->post('sarana_listrik'),
        'instalasi_kebakaran'=> $this->input->post('sarana_pencegahan'),
        'sarana_gas_mds'=> $this->input->post('sarana_gas'),
        'tata_udara'=> $this->input->post('sarana_udara'),
        'sarana_pencahayaan'=> $this->input->post('sarana_pencegahan'),
        'air_bersih'=> $this->input->post('sarana_air'),
        'ambulans'=> $this->input->post('sarana_ambulan'),
        'kat_jml_tt'=> $this->input->post('sarana_tt'),
        'keterangan'=> $this->input->post('sarana_catatan')
      );
      $this->db->insert('sarana_prasarana', $data_sarana);

      $data_sanitasi = array (
        'id_pengawasan'=> $id_pengawasan,
        'tsmp_medis'=> $this->input->post('sanitasi_instalasi'),
        'tsmp_organik'=> $this->input->post('sanitasi_sampah'),
        'wastafel'=> $this->input->post('sanitasi_wastafel'),
        'saluran_air_kotor'=> $this->input->post('sanitasi_saluran'),
        'limbah_mds'=> $this->input->post('sanitasi_pengelolaan'),
        'keterangan'=> $this->input->post('sanitasi_catatan')

      );
      $this->db->insert('sanitasi', $data_sanitasi);

      $data_kesesuaian = array (
        'id_pengawasan'=> $id_pengawasan,
        'id_pasien'=> $this->input->post('kesesuaian_identitas'),
        'kelengkapan_anamnesa'=> $this->input->post('kesesuaian_kelengkapan'),
        'fisik'=> $this->input->post('kesesuaian_pemeriksaan'),
        'jenis_terapi'=> $this->input->post('kesesuaian_jenis'),
        'tindakan'=> $this->input->post('kesesuaian_follow'),
        'nama_ttd_pemeriksa'=> $this->input->post('kesesuaian_ttd'),
        'keterangan'=> $this->input->post('kesesuaian_catatan')

      );
      $this->db->insert('rekam_medik', $data_kesesuaian);

      $data_kesehatan = array (
        'id_pengawasan'=> $id_pengawasan,
        'dokter'=> $this->input->post('tenaga_dokter'),
        'str_dokter'=> $this->input->post('tenaga_str_dokter'),
        'sip_dokter'=> $this->input->post('tenaga_sip'),
        'perawat'=> $this->input->post('tenaga_perawat'),
        'str_perawat'=> $this->input->post('tenaga_str_perawat'),
        'sip_perawat'=> $this->input->post('tenaga_sip_perawat'),
        'apoteker'=> $this->input->post('tenaga_apoteker'),
        'sik'=> $this->input->post('tenaga_sik'),
        'sipa_apoteker'=> $this->input->post('tenaga_sipa'),
        'analisis'=> $this->input->post('tenaga_analis'),
        'str_analis'=> $this->input->post('tenaga_str_kesehatan'),
        'sip_analis'=> $this->input->post('tenaga_sip_kesehatan'),
        'gizi'=> $this->input->post('tenaga_gizi'),
        'str_gizi'=> $this->input->post('tenaga_str_gizi'),
        'sip_gizi'=> $this->input->post('tenaga_sip_gizi'),
        'keterangan'=> $this->input->post('tenaga_catatan')

      );
      $this->db->insert('tenaga_kesehatan', $data_kesehatan);

      $data_administrasi = array (
        'id_pengawasan'=> $id_pengawasan,
        'laporan'=> $this->input->post('administrasi_laporan'),
        'catatan'=> $this->input->post('administrasi_catatan')

      );
      $this->db->insert('administrasi', $data_administrasi);
  }

  public function get_data_lokasi(){
    $this->db->select("*");
    $this->db->from("kesesuaian_lokasi_klinik");
    $query = $this->db->get();
      if ($query->num_rows() >0){
        foreach ($query->result() as $data) {
          $namaklinik[] = $data;
        }
      return $namaklinik;
      }
  }
     public function get_data_oprasional(){
    $this->db->select("*");
    $this->db->from("operasional");
    $query = $this->db->get();
      if ($query->num_rows() >0){
    foreach ($query->result() as $data) {
      $namaklinik[] = $data;
    }
  return $namaklinik;
  }
}
    public function get_data_bangunan(){
          $this->db->select("*");
          $this->db->from("bangunan");
          $query = $this->db->get();
          if ($query->num_rows() >0){
            foreach ($query->result() as $data) {
              $namaklinik[] = $data;
            }
      return $namaklinik;
      }
    }
    public function get_data_ruangan(){
          $this->db->select("*");
          $this->db->from("ruangan");
          $query = $this->db->get();
          if ($query->num_rows() >0){
            foreach ($query->result() as $data) {
              $namaklinik[] = $data;
            }
      return $namaklinik;
      }
    }
    public function get_data_sarana_prasarana(){
          $this->db->select("*");
          $this->db->from("sarana_prasarana");
          $query = $this->db->get();
          if ($query->num_rows() >0){
            foreach ($query->result() as $data) {
              $namaklinik[] = $data;
            }
      return $namaklinik;
      }
    }
    public function get_data_sanitasi(){
          $this->db->select("*");
          $this->db->from("sanitasi");
          $query = $this->db->get();
          if ($query->num_rows() >0){
            foreach ($query->result() as $data) {
              $namaklinik[] = $data;
            }
      return $namaklinik;
      }
    }
    public function get_data_rekam_medik(){
          $this->db->select("*");
          $this->db->from("rekam_medik");
          $query = $this->db->get();
          if ($query->num_rows() >0){
            foreach ($query->result() as $data) {
              $namaklinik[] = $data;
            }
      return $namaklinik;
      }
    }
    public function get_data_tenaga_kesehatan(){
          $this->db->select("*");
          $this->db->from("tenaga_kesehatan");
          $query = $this->db->get();
          if ($query->num_rows() >0){
            foreach ($query->result() as $data) {
              $namaklinik[] = $data;
            }
      return $namaklinik;
      }
    }
    public function get_data_administrasi(){
          $this->db->select("*");
          $this->db->from("administrasi");
          $query = $this->db->get();
          if ($query->num_rows() >0){
            foreach ($query->result() as $data) {
              $namaklinik[] = $data;
            }
      return $namaklinik;
      }
    }

  public function get_data_pengawasan($id_pus){
    $query = $this->db->query(
      'SELECT *
        FROM pengawasan
        join klinik on klinik.no_surat_izin = pengawasan.klinik
        WHERE id_puskesmas = "'.$id_pus.'"
      ');
    return $query->result_array();
  }

  public function get_data_klinik_per($id){
    $query = $this->db->query(
      'SELECT *
        FROM pengawasan
        join klinik on klinik.no_surat_izin = pengawasan.klinik
        WHERE id = "'.$id.'"
      ');
    return $query->result_array();
  }


  // public function get_data_pengawasan($id_pus){
  //   $this->db->select("*");
  //   $this->db->from("pengawasan");
  //   $this->db->where("id_puskesmas", $id_pus);
  //   $query = $this->db->get();
  //     if ($query->num_rows() >0){
  //       foreach ($query->result() as $data) {
  //         $namaklinik[] = $data;
  //       }
  //     return $namaklinik;
  //     }
  // }

  }
