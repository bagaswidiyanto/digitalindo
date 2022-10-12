<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['company'] = $this->db->get('tbl_website')->row();
		$this->data['banner'] = $this->db->get_where('tbl_banner', array('posisi' => '26', 'tipe' => '1'))->result();

		$this->db->order_by('created_date', 'desc');
		$berita = $this->db->get('tbl_posts', 3);


		$this->data['berita'] = $berita;
		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}

	public function add_user()
	{
		$nama = $this->input->post('nama');
		$telp = $this->input->post('telp');
		$namaLogistics = $this->input->post('namaLogistics');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$domisili = $this->input->post('domisili');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nama' => $nama,
			'noTelp' => $telp,
			'namaLogistics' => $namaLogistics,
			'alamat' => $alamat,
			'email' => $email,
			'domisili' => $domisili,
			'keterangan' => $keterangan
		);
		$this->M_data->input_data($data, 'log_user');
		// echo "<script>alert('Success');</script>";
		redirect('../thank_you', 'refresh');
	}

	public function download()
	{
		force_download('upload/Promo-List-EMCO.pdf', NULL);
	}
}
