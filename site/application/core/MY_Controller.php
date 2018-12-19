<?php 
	class MY_Controller extends CI_Controller {

	public $data;
	public function __construct() {
		parent::__construct();
		
		$this->form_validation->set_error_delimiters('<em class="error">', '</em>');
		$this->data['msg_error'] 	= $this->session->flashdata("msg_error");
		$this->data['msg_success'] 	= $this->session->flashdata("msg_success");
	}
}