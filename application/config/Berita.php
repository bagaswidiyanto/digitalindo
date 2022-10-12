<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MY_Controller
{

	public function index()
	{

		$this->db->order_by('created_date', 'desc');
		$berita = $this->db->get('tbl_posts', 5);
		$this->data['berita_side'] = $berita;

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
		$this->db->order_by('created_date', 'desc');
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
		$slug = $this->uri->segment(3);
		$this->data['subkategori'] = $this->db->get('tbl_subkaterogri')->result();
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

	public function tag()
	{

		$this->data['tag'] = $this->input->get('id');

		$tag = $this->input->get('id');
		$this->load->library('pagination');

		$this->db->select('tbl_posts.*');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
		$this->db->where('f.tagID', $tag);

		$query =  $this->db->get();
		$jml = $query->num_rows();

		$config['base_url'] = base_url() . 'news/tag/' . $tag . '/index/';
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

		$this->db->select('tbl_posts.*');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
		$this->db->where('f.tagID', $tag);
		$this->db->group_by('id');
		$this->db->order_by('created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);

		$berita = $this->db->get();

		$this->data['berita'] = $berita;
		$this->data['pagination'] = $this->pagination->create_links();
		$this->web = 'content/v_berita';
		$this->layout();
	}
}
