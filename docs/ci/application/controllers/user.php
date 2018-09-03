<?php
class User extends CI_Controller{
    public function show($user_id){
//        $this->load->model('user_model');
        $data['result'] = $this->user_model->get_users($user_id, 'anu@outlook.com');
        
        $this->load->view('user_view', $data);  
        
    }
    
    public function insert(){
        
        $email = 'anushka@gmail.com';
        $password = 'anushka';
        
        $this->user_model->create_users([
            'email' => $email,
            'password' => $password
        ]);
    }
    
    public function update(){
        
        $id = 3;
        $email = 'anushka@gmail.com';
        $password = 'anu';
        
        $this->user_model->update_users([
            'email' => $email,
            'password' => $password
        ], $id);
    }
    
    public function delete(){
        $id = 3;
        $this->user_model->delete_users($id);
	}
	

	//countries
	public function get_all_countries(){
		$data['countries'] = $this->user_model->get_all_countries();
		$this->load->view('user_view', $data);
	}

	public function get_one_country($id){
		$data['country'] = $this->user_model->get_one_country($id);
		$this->load->view('user_view', $data);
	}

	//cities
	public function get_all_cities(){
		$data['cities'] = $this->user_model->get_all_cities();
		$this->load()->view('user_view', $data);
	}

	public function get_country_cities($country_id){
		$data['cities'] = $this->user_model->get_country_cities($country_id);
		$this->load->view('user_view', $data);
	}

	public function get_one_city($country_id){
		$data['city'] = $this->user_model->get_one_city($country_id);
		$this->load->view('user_view', $data);
	}

	//meals_categories
	public function get_all_meals_categories(){
		$data['meals_categories'] = $this->user_model->get_all_meals_categories();
		$this->load->view('user_view', $data);
	}
	
	public function get_one_meals_categories($meals_categories_id){
		$data['meals_categories'] = $this->user_model->get_one_meals_categories($meals_categories_id);
		$this->load->view('user_view', $data);
	}

	//meals
	public function get_all_meals(){
		$data['meals'] = $this->user_model->get_all_meals();
		$this->load->view('user_view', $data);
	}

	public function get_one_meal($meals_id){
		$data['meal'] = $this->user_model->get_one_meal($meals_id);
		$this->load->view('user_view', $data);
	}

	public function get_city_meals($city_id){
		$data['city_meals'] = $this->user_model->get_city_meals($city_id);
		$this->load->view('user_view', $data);
	}


	// meals_orders
	public function get_all_meals_orders(){
		$data['meals_orders'] = $this->user_model->get_all_meals_orders();
		$this->load->view('user_view', $data);
	}

	public function get_one_meals_orders($order_id){
		$data['meals_order'] = $this->user_model->get_one_meals_orders();
		$this->load->view('user_view', $data);
	}
}
?>
