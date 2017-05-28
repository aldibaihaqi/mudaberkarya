<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function index()
	{
		$data_produk = $this->Produk_Model->getData();
		$this->load->view('index', array('data_produk' => $data_produk));
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function produk()
	{
		$data_produk = $this->Produk_Model->getData();
		$this->load->view('produk',array ('data_produk' => $data_produk));

	}

	public function pesan()
	{
		$this->load->view('pesan');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function create_pesan(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'jumlah' => $this->input->post('jumlah'),
			'spesifikasi' => $this->input->post('spesifikasi'),
			'alamat' => $this->input->post('alamat')
		);
		
		$res = $this->My_Model->addData('pesan',$data);
		if($res >= 1){
			//$data = $this->My_Model->getData();
			//$this->load->view('pesan_review', array('data' => $data));
			$this->load->view('pesan_review');
		} else{
			echo '<script language="javascript">';
			echo 'alert("Pesan gagal dikirim");';
			echo '</script>';
		}

	}

	function pesan_produk($kode=""){
		$brg = $this->Produk_Model->getData("where kode = '$kode'");
		
		$data = array(
			'spesifikasi' => $brg[0]['kode'],
		);

		$this->load->view('pesan',$data);
	}

	function delete($id_pesan){
		$where = array(
			'id_pesan' => $id_pesan
		//	$kode_barang;
		);

		$this->My_Model->deleteData('pesan',$where);

		$data = $this->My_Model->getData();
		$this->load->view('admin/pesanan', array('data' => $data));
	}

	function delete_produk($kode){
		$where = array(
			'kode' => $kode
		);

		$this->My_Model->deleteData('produk',$where);

		$data = $this->Produk_Model->getData();
		$this->load->view('admin/produk', array('data' => $data));
	}

	function readData() {
		$data = $this->My_Model->getData();
		$this->load->view('admin/index_admin', array('data' => $data));
	}

	function admin_home(){
	    session_start();
    	if ($_SESSION['login'] == false) {
        	header("Location: login");
    	} else {
			$data['pesanan'] = $this->My_Model->getData();
			$data['produk'] = $this->Produk_Model->getData();

			$this->load->view('/admin/index_admin', array('data' => $data));
		}
	}

	function admin_profile(){
		session_start();
    	if ($_SESSION['login'] == false) {
        	header("Location: login");
    	} else {
			$this->load->view('/admin/profile');
		}
	}

	function produk_item($id_produk){
		$item = $this->Produk_Model->getData("where id_produk = '$id_produk'");
		$data_item = array(
			'id_produk' => $item[0]['id_produk'],
			'nama_produk' => $item[0]['nama_produk'],
			'jenis' => $item[0]['jenis'],
			'kode' => $item[0]['kode'],
			'ukuran' => $item[0]['ukuran'],
			'harga' => $item[0]['harga'],
			'deskripsi' => $item[0]['deskripsi'],
			'path' => $item[0]['path'],
		);
		$this->load->view('produk_item',array('data'=>$data_item));
	}

	function authen(){
		session_start();

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$isLogin = $this->My_Model->login_authen($username, $password);

		if ($isLogin == true){
			$_SESSION['username'] = $username;
			$_SESSION['login'] = $isLogin;

			$data['pesanan'] = $this->My_Model->getData();
			$data['produk'] = $this->Produk_Model->getData();
			$this->load->view('admin/index_admin', array('data' => $data));
		} else {
			echo '<script language="javascript">';
			echo 'alert("Kombinasi Username/Password yang Anda masukkan salah!");';
			echo '</script>';
			$this->load->view('login');
		}
		
	}

	function logout(){
		session_start();
		session_destroy();
		$data_produk = $this->Produk_Model->getData();
		$this->load->view('index', array('data_produk' => $data_produk));
	}

}
