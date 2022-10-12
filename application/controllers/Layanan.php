<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends MY_Controller {

	public function index()
	{
		$this->web='content/v_produk';
		$this->layout();
	}
}
