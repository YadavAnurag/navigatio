<?php
defined('BASEPATH') OR exit("I don't know what to write here.");

Class Login extends CI_Controller{

	function login(){
		// http://localhsot/form/codeigniter
		$data['title'] = 'Login Form with Sessions';
		$this->load->view("login", $data)
	}

	function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run()){
			// true
			$username = $this->input->post('username');
			$password = $this->input->post('password');
		}
	}
}
	