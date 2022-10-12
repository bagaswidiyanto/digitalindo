<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MY_Controller
{

	public function index()
	{


		$param = @$_GET['search'];

		$this->load->library('pagination');

		$jml = $this->db->count_all('tbl_posts');
		$config['base_url'] = base_url() . 'berita/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 6;
		$config['full_tag_open'] = '<ul class="justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);


		$this->db->select('tbl_posts.*, sys_users.first_name, sys_users.last_name');
		$this->db->from('tbl_posts');
		$this->db->join('sys_users', 'sys_users.id = tbl_posts.createUserId', 'left');
		$this->db->order_by('tbl_posts.created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);
		$this->db->like('Title', $param);

		$berita = $this->db->get();

		$this->data['berita'] = $berita;
		$this->data['pagination'] = $this->pagination->create_links();
		$this->web = 'content/v_berita';
		$this->layout();
	}

	public function baca()
	{
		// echo	$this->input->ip_address();
		$this->load->library('user_agent');
		$this->data['ip'] = $_SERVER['HTTP_USER_AGENT'];

		$slug = $this->uri->segment(3);

		$this->db->order_by('idKategori', 'desc');
		$this->db->limit('5');
		$this->data['kategori'] = $this->db->get('tbl_kategori_berita')->result();

		$berita = $this->db->get_where('tbl_posts', array('slug' => $slug));
		$this->data['berita'] = $berita->row();
		if ($berita->num_rows() > 0) {


			$this->db->order_by('created_date', 'desc');
			$this->db->limit('4');
			$this->data['recent'] = $this->db->get('tbl_posts');
			$this->web = 'content/v_berita_detail.php';
			$this->layout();
		} else {
			redirect(base_url() . 'berita');
		}
	}

	public function like2()
	{
		// $ip = $this->input->ip_address();
		$this->load->library('user_agent');
		$ip = $_SERVER['HTTP_USER_AGENT'];
		$beritaID = $this->input->get('id');

		// if ($ip == $ip && $beritaID == $beritaID) {
		// $create_log = $this->db->query("DELETE FROM tbl_posts_counter WHERE ip = '" . $ip . "'");
		// } else {
		$create_log = $this->db->query("INSERT INTO tbl_posts_counter(ip,beritaID,`timestamp`)VALUES('$ip', '$beritaID',NOW()) ");
		// }


		if ($create_log == true) {
			$cekJml = $this->db->query("SELECT COUNT(*) as jml FROM tbl_posts_counter WHERE beritaID = '" . $beritaID . "'")->row();
			$msg['msg'] = "good";
			$msg['jml'] = $cekJml->jml;
		} else {
			$cekJml = $this->db->query("SELECT COUNT(*) as jml FROM tbl_posts_counter WHERE beritaID = '" . $beritaID . "'")->row();
			$msg['msg'] = "error";
			$msg['jml'] = $cekJml->jml;
		}

		echo json_encode($msg);
	}

	public function like()
	{
		// $ip = $this->input->ip_address();
		$this->load->library('user_agent');
		$ip = $_SERVER['HTTP_USER_AGENT'];
		$beritaID = $this->input->get('id');

		// if ($ip == $ip && $beritaID == $beritaID) {
		// $create_log = $this->db->query("DELETE FROM tbl_posts_counter WHERE ip = '" . $ip . "'");
		// } else {
		$create_log = $this->db->query("INSERT INTO tbl_posts_counter(ip,beritaID,`timestamp`)VALUES('$ip', '$beritaID',NOW()) ");
		// }


		if ($create_log == true) {
			$cekJml = $this->db->query("SELECT COUNT(*) as jml FROM tbl_posts_counter WHERE beritaID = '" . $beritaID . "'")->row();
			$msg['msg'] = "good";
			$msg['jml'] = $cekJml->jml;
		} else {
			$cekJml = $this->db->query("SELECT COUNT(*) as jml FROM tbl_posts_counter WHERE beritaID = '" . $beritaID . "'")->row();
			$msg['msg'] = "error";
			$msg['jml'] = $cekJml->jml;
		}

		echo json_encode($msg);
	}

	public function tag()
	{

		$this->data['tag'] = $this->input->get('id');



		$tag = $this->input->get('id');

		$this->load->library('pagination');


		$this->db->select('tbl_posts.*');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
		$this->db->join('sys_users g', 'g.id = tbl_posts.createUserId', 'left');
		$this->db->where('f.tagID', $tag);

		$query =  $this->db->get();
		$jml = $query->num_rows();

		$config['base_url'] = base_url() . 'berita/category/' . $tag . '/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 6;
		$config['full_tag_open'] = '<ul class="justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);

		$this->db->select('tbl_posts.*, g.*');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
		$this->db->join('sys_users g', 'g.id = tbl_posts.createUserId', 'left');
		$this->db->where('f.tagID', $tag);
		$this->db->group_by('tbl_posts.id');
		$this->db->order_by('tbl_posts.created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);

		$berita = $this->db->get();

		$this->data['berita'] = $berita;
		$this->data['pagination'] = $this->pagination->create_links();
		$this->web = 'content/v_berita';
		$this->layout();
	}

	public function category()
	{

		$this->data['idKategori'] = $this->input->get('idKategori');



		$idKategori = $this->input->get('idKategori');

		$this->load->library('pagination');


		$this->db->select('tbl_posts.*, g.* ,b.namaKategori, b.idKategori');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_kategori_berita b', 'b.idKategori = tbl_posts.idKategori', 'left');
		$this->db->join('sys_users g', 'g.id = tbl_posts.createUserId', 'left');
		$this->db->where('tbl_posts.idKategori', $idKategori);

		$query =  $this->db->get();
		$jml = $query->num_rows();

		$config['base_url'] = base_url() . 'berita/category/' . $idKategori . '/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 6;
		$config['full_tag_open'] = '<ul class="justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);

		$this->db->select('tbl_posts.*, g.* ,b.namaKategori, b.idKategori');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_kategori_berita b', 'b.idKategori = tbl_posts.idKategori', 'left');
		$this->db->join('sys_users g', 'g.id = tbl_posts.createUserId', 'left');

		$this->db->where('tbl_posts.idKategori', $idKategori);
		$this->db->group_by('tbl_posts.id');
		$this->db->order_by('tbl_posts.created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);

		$berita = $this->db->get();

		$this->data['berita'] = $berita;
		$this->data['pagination'] = $this->pagination->create_links();
		$this->web = 'content/v_berita';
		$this->layout();
	}
}
