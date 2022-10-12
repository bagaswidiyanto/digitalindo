<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien extends MY_Controller {

	public function index()
	{
		$this->web='content/v_klien';
		$this->layout();
	}
}
