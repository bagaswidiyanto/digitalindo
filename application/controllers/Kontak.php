<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends MY_Controller {

	public function index()
	{
		$this->data['maps']=$this->db->get('tbl_maps')->row();
		$this->web='content/v_kontak';
		$this->layout();
	}
}
