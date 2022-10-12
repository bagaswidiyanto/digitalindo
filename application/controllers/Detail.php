<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends MY_Controller {

	public function index()
	{
		$this->web='content/v_detail';
		$this->layout();
	}
}
