<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calculator extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('food_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
			'pageTitle' => 'UniHealth | Calculator',
			'user' => $this->user_model->getUserLoginData()
		];

		if ($this->session->userdata('user_username')) {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar-login');
			$this->load->view('calculator');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('calculator');
			$this->load->view('template/footer');
		}
	}

	public function check_default($post_value)
	{
		return $post_value == '0' ? FALSE : TRUE;
	}

	public function calculate()
	{
		$this->form_validation->set_rules('gender', 'Gender', 'required|callback_check_default');
		$this->form_validation->set_message('check_default', 'You need to select something other than the default');
		$this->form_validation->set_rules('height', 'Height', 'required|trim|is_natural_no_zero');
		$this->form_validation->set_rules('weight', 'Weight', 'required|trim|is_natural_no_zero');
		$this->form_validation->set_rules('age', 'Age', 'required|trim|is_natural_no_zero');
		$this->form_validation->set_rules('exercise', 'Exercise', 'required|callback_check_default');
		$this->form_validation->set_message('check_default', 'You need to select something other than the default');
	
		if ($this->form_validation->run()) {
			$data = [
				'pageTitle' => 'UniHealth | Calculator',
				'user' => $this->user_model->getUserLoginData(),
				'foods' => $this->food_model->getReccomendationFoods(),
				'calorie' => $this->_getCalorie(),
				'protein' =>$this->_getProtein(),
				'fat' => $this->_getFat(),
				'carb' => $this->_getCarb(),
				'fiber' => $this->_getFiber()
			];

			if ($this->session->userdata('user_username')) {
				$this->load->view('template/header', $data);
				$this->load->view('template/navbar-login');
				$this->load->view('calculator');
				$this->load->view('result');
				$this->load->view('template/footer');
			} else {
				$this->load->view('template/header', $data);
				$this->load->view('template/navbar');
				$this->load->view('calculator');
				$this->load->view('result');
				$this->load->view('template/footer');
			}
		} else {
			$data = [
				'pageTitle' => 'UniHealth | Calculator',
				'user' => $this->user_model->getUserLoginData()
			];

			if ($this->session->userdata('user_username')) {
				$this->load->view('template/header', $data);
				$this->load->view('template/navbar-login');
				$this->load->view('calculator');
				$this->load->view('template/footer');
			} else {
				$this->load->view('template/header', $data);
				$this->load->view('template/navbar');
				$this->load->view('calculator');
				$this->load->view('template/footer');
			}
		}
	}

	public function _getCalorie() {
		$gender = $this->input->post('gender');
		$height = $this->input->post('height');
		$weight = $this->input->post('weight');
		$age = $this->input->post('age');
		$activities = $this->input->post('exercise');

		switch($gender) {
			case 1:
				$bmr = ( 10 * $weight) + (6.25 * $height) - (5 * $age) + 5;
			break;
			case 2:
				$bmr = ( 10 * $weight) + (6.25 * $height) - (5 * $age) - 161;
			break;
		}

		switch($activities) {
			case 1:
				$calorie = $bmr * 1.2;
			break;
			case 2:
				$calorie = $bmr * 1.375;
			break;
			case 3:
				$calorie = $bmr * 1.55;
			break;
			case 4:
				$calorie = $bmr * 1.75;
			break;
		}		
		
		return $calorie;
	}

	private function _getProtein() {
		$protein =  $this->_getCalorie() * (15 / 100);

		return $this->_calorieToGram($protein);
	}

	private function _getFat() {
		$fat = $this->_getProtein() * (20 / 100);

		return $this->_calorieToGram($fat);
	}

	private function _getCarb() {
		$carb = $this->_getProtein() * (65 / 100);

		return $this->_calorieToGram($carb);
	}

	private function _getFiber() {
		$age = $this->input->post('age');

		if($age > 1 && $age < 5) {
			$fiber = 15;
		} else if($age >= 5 && $age < 11) {
			$fiber  = 20;
		}else if($age >= 11 && $age < 17) {
			$fiber = 25;
		} else {
			$fiber = 30;
		}

		return $fiber;
	}

	private function _calorieToGram($calorie) {
		return $calorie / 4;
	}


}
