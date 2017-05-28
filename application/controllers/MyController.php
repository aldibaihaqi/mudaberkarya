<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	function create() {
		$data = array(
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'satuan' => $this->input->post('satuan'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			'kategori' => $this->input->post('kategori')
		);
		
		$this->My_Model->addData($data);
		$this->index();

	}
	
	function readData() {
		$data = $this->My_Model->getData();
		$this->load->view('view', array('data' => $data));
	}

	//tambah
	function update($kode_barang){
		$brg = $this->My_Model->getData("where kode_barang = '$kode_barang'");
		$data = array(
			'kode_barang' => $brg[0]['kode_barang'],
			'nama_barang' => $brg[0]['nama_barang'],
			'satuan' => $brg[0]['satuan'],
			'jumlah' => $brg[0]['jumlah'],
			'harga' => $brg[0]['harga'],
			'kategori' => $brg[0]['kategori'],
		);

		$this->load->view('update_tambah',$data);
	}

	function update_kurang($kode_barang){
		$brg = $this->My_Model->getData("where kode_barang = '$kode_barang'");
		$data = array(
			'kode_barang' => $brg[0]['kode_barang'],
			'nama_barang' => $brg[0]['nama_barang'],
			'satuan' => $brg[0]['satuan'],
			'jumlah' => $brg[0]['jumlah'],
			'harga' => $brg[0]['harga'],
			'kategori' => $brg[0]['kategori'],
		);

		$this->load->view('update_kurang',$data);
	}

	function update_edit($kode_barang){
		$brg = $this->My_Model->getData("where kode_barang = '$kode_barang'");
		$data = array(
			'kode_barang' => $brg[0]['kode_barang'],
			'nama_barang' => $brg[0]['nama_barang'],
			'satuan' => $brg[0]['satuan'],
			'jumlah' => $brg[0]['jumlah'],
			'harga' => $brg[0]['harga'],
			'kategori' => $brg[0]['kategori'],
		);

		$this->load->view('update_edit',$data);
	}

	//tambah
	function do_update(){
		$kode_barang = $_POST['kode_barang'];
		$jumlah = $_POST['jumlah'];
		$tambah = $_POST['tambah'];

		$data_update = array(
			'jumlah' => $jumlah + $tambah,
			//$jumlah + $tambah;
		);

		$where = array(
			'kode_barang' => $kode_barang
			//$kode_barang;
		);

		$this->My_Model->updateData('barang',$data_update,$where);

		//read tabel
		$data = $this->My_Model->getData();
		$this->load->view('view', array('data' => $data));
	}

	function do_kurang(){
		$kode_barang = $_POST['kode_barang'];
		$jumlah = $_POST['jumlah'];
		$kurang = $_POST['kurang'];

		$data_update = array(
			'jumlah' => $jumlah - $kurang,
		);

		$where=array(
			'kode_barang' => $kode_barang
		);

		$this->My_Model->updateData('barang',$data_update,$where);

		//read tabel
		$data = $this->My_Model->getData();
		$this->load->view('view', array('data' => $data));
	}

	function do_edit(){
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$satuan = $_POST['satuan'];
		$harga = $_POST['harga'];
		$kategori = $_POST['kategori'];

		$data_update = array(
			'nama_barang' => $nama_barang,
			'satuan' => $satuan,
			'harga' => $harga,
			'kategori' => $kategori,
		);

		$where=array(
			'kode_barang' => $kode_barang
		);

		$this->My_Model->updateData('barang',$data_update,$where);

		//read tabel
		$data = $this->My_Model->getData();
		$this->load->view('view', array('data' => $data));
	}

	function delete($kode_barang){
		$where = array(
			'kode_barang' => $kode_barang
		//	$kode_barang;
		);

		$this->My_Model->deleteData('barang',$where);

		//read tabel
		$data = $this->My_Model->getData();
		$this->load->view('view', array('data' => $data));
	}

}
