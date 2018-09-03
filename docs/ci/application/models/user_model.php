<?php
class User_Model extends CI_Model{
	

	// Countries 

	public function get_all_countries(){
		$query = $this->db->get('countries');
		return $query->result();
	}

	public function get_one_country($id){
		$this->db->where(['id'=>$id]);
		$query = $this->db->get('countries');
		return $query->result();
	}


	//cities
	public function get_all_cities(){
		$query = $this->db->get('cities');
		return $query->result();
	}

	public function get_country_cities($country_id){
		$this->db->where(['id'=>$country_id]);
		$query = $this->db->get('countries');
		return $query->result();
	}

	public function get_one_city($id){
		$this->db->where(['id'=>$id]);
		$query = $this->db->get('cities');
		return $query->result();
	}

	// meals
	public function get_all_meals_categories(){
		$query = $this->db->get('meals_categories');
		return $query->result();
	}

	public function get_one_meals_categories($category_id){
		$this->db->where(['id'=>$category_id]);
		$query = $this->db->get('meals_categories');
		return $query->result();
	}

	public function get_all_meals(){
		$query = $this->db->get('meals');
		return $query->result();
	}

	public function get_one_meal($meal_id){
		$this->db->where(['id'=>$meal_id]);
		$query = $this->db->get('meals');
		return $query->result();
	}
	
	public function get_city_meals($city_id){
		$this->db->where(['id'=>$city_id]);
		$query = $this->db->get('meals');
		return $query->result();
	}



	// meals_orders
	public function get_all_meals_orders(){
		$query = $this->db->get('meals_orders');
		return $query->result();
	}

	public function get_one_meals_orders($meals_orders_id){
		$this->db->where(['id'=>$meals_orders_id]);
		$query = $this->db->get('meals_orders');
		return $query->result();
	}



}
?>
