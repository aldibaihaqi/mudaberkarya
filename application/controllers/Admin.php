<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->model('Admin_Model');
		$this->load->model('Produk_Model');
		$this->load->helper('url');

	}

	/*function admin_profile(){
		$data = $this->Admin_Model->getData();
		$this->load->view('admin/profile', array('data' => $data));
	}*/
	function admin_profile($username){
		session_start();
		$username = $_SESSION['username'];

		$brg = $this->Admin_Model->getData("where username = '$username'");
		$profile = array(
			'fullname' => $brg[0]['fullname'],
			'username' => $brg[0]['username'],
			'password' => $brg[0]['password'],
			'phone' => $brg[0]['phone'],
		);

		$this->load->view('admin/profile',$profile);
	
	}

	function update_admin(){
		session_start();
		$username = $_SESSION['username'];

		$fullname = $_POST['fullname'];
		//$username = $_POST['username'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];

		$data_update = array(
			'fullname' => $fullname,
			'password' => $password,
			'phone' => $phone,
		);

		$where = array(
			'username' => $username
		);

		$this->Admin_Model->updateData('admin',$data_update,$where);
		$this->admin_profile();
	}

	function admin_pesanan(){
		$data = $this->My_Model->getData();
		$this->load->view('admin/pesanan', array('data' => $data));
	}

	function admin_produk(){
		$data = $this->Produk_Model->getData();
		$this->load->view('admin/produk', array('data' => $data));
	}

	function insert_produk(){
		//$target_Path = NULL;
			if ($_FILES['path']['name'] != NULL)
			{
				$target_Path = "assets/file/image/produk/";
				$string = basename( $_FILES['path']['name'] );
				$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
			}

			//update Foto Slider
			if($target_Path!=NULL){
				$data = array(
					'nama_produk'=> $this->input->post('nama_produk'),
					'jenis'=> $this->input->post('jenis'),
					'kode'=> $this->input->post('kode'),
					'ukuran'=> $this->input->post('ukuran'),
					'harga'=> $this->input->post('harga'),
					'deskripsi'=> $this->input->post('deskripsi'),
					'path' => $target_Path
					);
					
					$query = $this->Produk_Model->insert('produk', $data);
				}
			
			//print_r($path);die();
			////////////////////////////
			if($query)
			{
				if ($target_Path != NULL) {
					move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
				}
				echo '<script language="javascript">';
				echo 'alert("File berhasil ditambahkan");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}else
			{

				echo '<script language="javascript">';
				echo 'alert("Gagal menyimpan file");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}
	}

	function edit_produk($kode){
		$brg = $this->Produk_Model->getData("where kode = '$kode'");
		$produk = array(
			'id_produk' => $brg[0]['id_produk'],
			'nama_produk' => $brg[0]['nama_produk'],
			'jenis' => $brg[0]['jenis'],
			'kode' => $brg[0]['kode'],
			'ukuran' => $brg[0]['ukuran'],
			'harga' => $brg[0]['harga'],
			'deskripsi' => $brg[0]['deskripsi'],
			'path' => $brg[0]['path'],
		);

		$this->load->view('admin/produk_edit', $produk);
	}

	/*function do_edit(){
		$nama_produk = $_POST['nama_produk'];
		$jenis = $_POST['jenis'];
		$kode = $_POST['kode'];
		$ukuran = $_POST['ukuran'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];

		$data_update = array(
			'nama_produk' => $nama_produk,
			'jenis' => $jenis,
			'ukuran' => $ukuran,
			'harga' => $harga,
			'deskripsi' => $deskripsi,
		);

		$where=array(
			'kode' => $kode
		);

		$this->Produk_Model->updateData('produk',$data_update,$where);
	}*/

	function do_edit(){
		$nama_produk = $_POST['nama_produk'];
		$jenis = $_POST['jenis'];
		$kode = $_POST['kode'];
		$ukuran = $_POST['ukuran'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];

				$target_Path = "assets/file/image/produk/";
				$string = basename( $_FILES['path']['name'] );
				$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
		
		
		
				$data_update = array(
					'nama_produk' => $nama_produk,
					'jenis' => $jenis,
					'ukuran' => $ukuran,
					'harga' => $harga,
					'deskripsi' => $deskripsi,
					'path' => $target_Path
				);

				$where = array(
					'kode' => $kode
				);
					
				$query = $this->Produk_Model->updateData('produk',$data_update,$where);

				if($query)
				{
					if ($target_Path != NULL) {
						move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
					}
					echo '<script language="javascript">';
					echo 'alert("File berhasil ditambahkan");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Gagal menyimpan file");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
			
	}
}
