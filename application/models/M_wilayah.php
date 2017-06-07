<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_wilayah extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		function get_all_provinsi() {
			$this->db->select('*');
			$this->db->from('kecamatan');
			$this->db->where('id_kab','3273');
			$query = $this->db->get();

			return $query->result();
		}
	}
?>
