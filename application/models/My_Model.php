<?php
	class My_Model extends CI_Model {
		public function __construct() {
		parent::__construct();
		
		}

		function getData($where="") {
			//$query = $this->db->get('barang');
			//return $query->result_array();
			$data = $this->db->query('select * from pesan ' . $where);
			return $data->result_array();
		}

		function addData($tablename, $data) {
			$res = $this->db->insert($tablename, $data);
			return $res;
		}

		function updateData($tablename,$data,$where){
			$res = $this->db->update($tablename,$data,$where);

			//pake query biasa
			//$data = $this->db->query('UPDATE ' . $tablename . ' SET jumlah = '. $data . ' WHERE kode_barang = '. $where);
			//return $data;
		}

		function deleteData($tablename,$where){
			$res = $this->db->delete($tablename, $where);

			//pake query biasa
			//$data = $this->db->query('DELETE FROM ' . $tablename . ' WHERE kode_barang = '. $where);
			//return $data;
		}

		function login_authen($username, $password){
			$this->db->select('*');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->from('admin');  
			$query = $this->db->get();  
			if ($query->num_rows() == 1){
				return true;
			} else{
				return false;
			}
		}

	}
?>