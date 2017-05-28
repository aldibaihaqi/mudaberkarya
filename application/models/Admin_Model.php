<?php
	class Admin_Model extends CI_Model {
		public function __construct() {
		parent::__construct();
		
		}

		function getData($where="") {
			//$query = $this->db->get('admin');
			//return $query->result_array();
			$data = $this->db->query('select * from admin ' . $where);
			return $data->result_array();
		}

		function addData($tablename, $data) {
			$res = $this->db->insert($tablename, $data);
			return $res;
		}

		function updateData($tablename,$data_update,$where){
			$res = $this->db->update($tablename,$data_update,$where);
			return $res;
		}

		function deleteData($tablename,$where){
			$res = $this->db->delete($tablename, $where);

			//pake query biasa
			//$data = $this->db->query('DELETE FROM ' . $tablename . ' WHERE kode_barang = '. $where);
			//return $data;
		}

	}
?>