 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('food_model');
	}

	public function index()
	{

		$data = [
			'pageTitle' => "UniHealth | Home",
			'user' => $this->user_model->getUserLoginData(),
			'foods' => $this->food_model->getRecipe()
		];

        if($this->session->userdata('user_email')) {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar-login');
			$this->load->view('home');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('home');
			$this->load->view('template/footer');
		}
	}
}
