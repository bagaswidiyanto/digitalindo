<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends MY_Controller {

	public function index()
	{
		$karir=$this->db->get('tbl_career');
		$this->data['karir']=$karir;
		$this->web='content/v_karir';
		$this->layout();
	}
}
