<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

	
	public function index()
	{
		
		$this->load->library('email');

		$name=$this->input->post('name');
		
		
		$email=$this->input->post('email');
		
		$message=$this->input->post('message');

		$setting=$this->db->get('tbl_email',1)->row();

		$this->email->from($email, $name);
		$this->email->to($setting->emailTo);
		$this->email->cc($setting->emailCc);
		$this->email->bcc($setting->emailBcc);

		$this->email->subject($setting->emailSubject);
		$this->email->message('Nama : '.$name.'<br/>Pesan : '.$message);

		$this->email->send();

		echo $this->email->print_debugger();

	}
}
