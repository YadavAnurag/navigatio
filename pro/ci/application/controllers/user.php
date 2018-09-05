<?php
class User extends CI_Controller{
    // public function show($user_id){

    //     $data['result'] = $this->user_model->get_users($user_id, 'anu@outlook.com');
        
    //     $this->load->view('user_view', $data);  
        
    // }
    
    // public function insert(){
        
    //     $email = 'anushka@gmail.com';
    //     $password = 'anushka';
        
    //     $this->user_model->create_users([
    //         'email' => $email,
    //         'password' => $password
    //     ]);
    // }
    
    // public function update(){
        
    //     $id = 3;
    //     $email = 'anushka@gmail.com';
    //     $password = 'anu';
        
    //     $this->user_model->update_users([
    //         'email' => $email,
    //         'password' => $password
    //     ], $id);
    // }
    
    // public function delete(){
    //     $id = 3;
    //     $this->user_model->delete_users($id);
	// }
	
	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data = array(
				'errors' => validation_errors() 
			);

			$this->session->set_flashdata($data);
			redirect('home/');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// Calling model function 
			$user_id = $this->user_model->login_user($username, $password);

			if($user_id){

				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success', 'You are now logged in');

				$data['main_view'] = 'users/admin_view';
				$this->load->view('layouts/main', $data);
				// redirect('home/index');

			}else{
				$this->session->set_flashdata('login_failed', 'Sorry You are not logged in');
				redirect('home/');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/home/index/');
	}
}
?>
