<?php
class User extends CI_Controller{
    public function show($user_id){
//        $this->load->model('user_model');
        $data['result'] = $this->user_model->get_users($user_id);
        
        $this->load->view('user_view', $data);  
        
    }
}
?>
