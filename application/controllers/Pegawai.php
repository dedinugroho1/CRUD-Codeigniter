<?php

class Pegawai extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->helper('url');
	}

	function index()
	{
		$data['tampil'] = $this->M_pegawai->tampil_data()->result();
		$this->load->view('v_pegawai', $data);
	}

	function tambah()
	{
		$this->load->view('v_add_pegawai');
	}

	function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jabatan = $this->input->post('jabatan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jabatan' => $jabatan
		);
		$this->M_pegawai->input_data($data, 'tbl_pegawai');
		redirect(base_url('pegawai'));
	}
	
	function edit($id)
	{
		$where = array('id' => $id);
		$data['edit'] = $this->M_pegawai->edit_data($where, 'tbl_pegawai')->result();
		$this->load->view('v_edit_pegawai', $data);
	}

	function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jabatan = $this->input->post('jabatan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jabatan' => $jabatan
		);

		$where = array(
			'id' => $id
		);

		$this->M_pegawai->update($where, $data, 'tbl_pegawai');
		redirect(base_url('pegawai'));
	}


	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_pegawai->hapus_data($where, 'tbl_pegawai');
		redirect(base_url('pegawai'));
	}
}


//Dedi Nugroho // 0895361435659 // Surakarta