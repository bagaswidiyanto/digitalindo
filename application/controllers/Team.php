<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MY_Controller {

	public function index()
	{
		$this->web='content/v_team';
		$this->layout();
	}

	public function detail(){



	$slug=$this->uri->segment(3);
	$team=$this->db->get_where('tbl_team',array('slug'=>$slug));
	$this->data['team']=$team->row();
		if($team->num_rows()>0){ 
		
		
		$this->db->order_by('id','asc');
		$this->db->limit('4');
		$this->data['recent']=$this->db->get('tbl_team');
		$this->web = 'content/v_team_detail.php'; 
    	$this->layout();  

		}else{
		redirect(base_url().'team');	
		}
	}
}
