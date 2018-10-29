<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('Buku/buku_m', 'buku');
	}

	public function index() {
		$query = $this->buku->get();
		// $data = $query->result();
		// print_r($data);
		$data = array (
				'header' => 'Tampil Data Buku',
				// 'id' => $query->result(),
				// 'judul' => $query->result(),
				// 'pengarang' => $query->result(),
				// 'tahun_terbit' => $query->result(),
				'buku' => $query->result(),
			);
		$this->load->view('Buku/dashboard', $data);
	}

	public function add() {
		$data = array (
				'header' => 'Tambah Data Buku',
			);
		$this->load->view('Buku/buku_tambah', $data);
	}

	public function edit($id = null) {
		$query = $this->buku->get($id);
		$data = array (
				'header' => 'Edit Data Buku',
				'buku' => $query->row(),
			);
		$this->load->view('Buku/buku_edit', $data);
	}

	public function proses() {
		if (isset($_POST['add'])) {
			$inputData = $this->input->post(null, TRUE);
			$this->buku->add($inputData);
		} else if (isset($_POST['edit'])) {
			$inputData = $this->input->post(null, TRUE);
			$this->buku->edit($inputData);
		}
		redirect('buku');
	}

	public function delete($id) {
		$this->buku->delete($id);
		redirect('buku');
	}

}