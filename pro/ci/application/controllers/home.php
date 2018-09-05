<?php
class Home extends CI_Controller{
	public function index(){

		$data['main_view'] = "home_view";
		$data['login_view'] = "users/login_view";

		$this->load->view('layouts/main', $data) ;
	}
}
?>
