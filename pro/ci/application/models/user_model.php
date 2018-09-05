<?php
class User_Model extends CI_Model{
//    public function get_users(){
//        
//        
//        // Manually making connection to database(or use autoload) and anyone can make any number of connection to database
////        $config['hostname'] = 'localhsot';
////        $config['username'] = 'root';
////        $config['password'] = '';
////        $config['database'] = 'test'
////            
////        $connection = $this->load->database($config);
////        
////        
////        $config2['hostname'] = 'localhsot';
////        $config2['username'] = 'root';
////        $config2['password'] = '';
////        $config2['database'] = 'test'
////            
////        $connection = $this->load->database($config2);
//        
//        
//        
////        $query = $this->db->get('users');
////        return $query->result(); // will return the array of objects
//        
//        $query = $this->db->query('Select * from users');
////        return $query->num_rows(); //return number of rows in users tables
//        return $query->num_fields(); // return number of fields in users tables
//        
//        
//    }
    
    
    // public function get_users($user_id, $email){
        
//        $this->db->where('id', $user_id);
    //     $this->db->where(['id'=>$user_id, 'email'=>$email]);
        
    //     $query = $this->db->get('users');
    //     return $query->result();
    // }
    
    
    // public function create_users($data){
    //     $this->db->insert('users', $data);
    // }
    
    // public function update_users($data, $id){
    //     $this->db->where(['id'=>$id]);
    //     $this->db->update('users',$data);
    // }
    
    // public function delete_users($id){
    //     $this->db->where(['id'=>$id]);
    //     $this->db->delete('users');
	// }
	


	public function login_user($username, $password){
		
		$this->db->where(['username'=>$username, 'password'=>$password]);
		
		$result = $this->db->get('users');

		if($result->num_rows() == 1){
			return $result->row(0)->id;
		}else{
			return false;
		}
	}


	// joining tables
	public function join_to_tables($project_id){

		$this->db->select('
			tasks.task_name,
			tasks.task_body,
			tasks.id as task_id,
			projects.project_name,
			projects.project_body
		');

		$this->db->from('tasks');
		$this->db->join('projects', 'projects.id = tasks.project_id');
		$this->db->where(['tasks.project_id'=>$project_id]);
	}
}
?>
