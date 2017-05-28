<?php
	class Produk_Model extends CI_Model {
		public function __construct() {
		parent::__construct();
		
		}

		function getData($where="") {
			$data = $this->db->query('select * from produk ' . $where);
			return $data->result_array();
		}

		/*function addData($tablename, $data) {
			$res = $this->db->insert($tablename, $data);
			return $res;
		}*/

		public function insert($tablename, $where){
			return $this->db->insert($tablename, $where);
		}

		function updateData($tablename,$data_update,$where){
			$res = $this->db->update($tablename,$data_update,$where);
			return $res;
		}

		function deleteData($tablename,$where){
			$res = $this->db->delete($tablename, $where);
		}

	}
?>