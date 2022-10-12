<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends MY_Controller
{

	public function index()
	{
		$this->web = 'content/v_testimoni';
		$this->layout();
	}

	public function Add()
	{
		$data = array(
			'namaPerusahaan' => strtoupper($this->input->post('namaPerusahaan')),
			'nama' => $this->input->post('nama'),
			'jabatan' => $this->input->post('jabatan'),
			'pertimbangan' => $this->input->post('pertimbangan'),
			'hasil' => $this->input->post('hasil'),
			'fitur' => $this->input->post('fitur'),
			'manfaat' => $this->input->post('manfaat'),
			'rekomendasi' => $this->input->post('rekomendasi'),
			'pelayanan' => $this->input->post('pelayanan'),
			'penilaian' => $this->input->post('penilaian'),
			'pesan' => $this->input->post('pesan'),
			'foto' => $this->uploadImage()
		);
		$this->db->insert('tbl_testimonial2', $data);
		// $this->session->set_flashdata('msg', 'Testimoni berhasil dikirim!');
		// redirect('../testimoni');
		$this->web = 'content/v_testimoni_success';
		$this->layout();
	}

	private function uploadImage()
	{
		$config['upload_path']          = './upload/testimoni/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		//$config['file_name']            = $this->input->post("foto");
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);
		if (!is_dir('./upload/testimoni/')) {
			mkdir('./upload/testimoni/', 0777, TRUE);
		}
		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}

		return $this->upload->data("file_name");
	}

	public function detail()
	{

		$slug = $this->uri->segment(3);
		// $isiSlug = str_replace("testimoni", "", $slug);
		$testimoni = $this->db->get_where('tbl_testimonial2', array('id' => $slug));
		$this->data['testimoni'] = $testimoni->row();
		if ($testimoni->num_rows() > 0) {
			$this->web = 'content/v_testimoni_detail.php';
			$this->layout();
		} else {
			redirect(base_url());
		}
	}
}
