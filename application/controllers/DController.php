<?php

class DController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DModel');
	}

	public function index()
	{
		$data['data_table'] = $this->DModel->getAll();
		$this->load->view('mahasiswa_index', $data);
	} 
	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

	public function simpan_data()
	{
		$data = array(
			// 'id_07' => $this->input->post('id_07'),
			'kolom_jurusan' => $this->input->post('kolom_jurusan'),
			'kolom_kelas' => $this->input->post('kolom_kelas'),
			'kolom_isi' => $this->input->post('kolom_isi'),
		);

		$this->DModel->store($data);
		redirect('DController/index','refresh');
	}

}