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
    
    
    public function get_users($user_id){
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return $query->result();
    }
}
?>
