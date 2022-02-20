<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foods extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$this->load->model('user_model');
		$this->load->model('food_model');
	}

	public function index()
	{
		$data = [
			'pageTitle' => 'UniHealth | Foods',
			'user' => $this->user_model->getUserLoginData(),
			'foods' => $this->food_model->getListFoods()
		];

		if ($this->session->userdata('user_username')) {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar-login');
			$this->load->view('foods');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('foods');
			$this->load->view('template/footer');
		}
	}

	public function listSearchFood()
	{
		$data = [
			'pageTitle' => 'UniHealth | Foods',
			'user' => $this->user_model->getUserLoginData(),
			'foods' => $this->food_model->getSearchFood()
		];

		if ($this->session->userdata('user_username')) {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar-login');
			$this->load->view('foods');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('foods');
			$this->load->view('template/footer');
		}
	}

	
	public function detailFood()
	{
		$data = [
			'pageTitle' => 'UniHealth | Detail Food',
			'user' => $this->user_model->getUserLoginData(),
			'foods' => $this->food_model->getDetailFood()
		];
		

		if ($this->session->userdata('user_username')) {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar-login');
			$this->load->view('detail-food');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('detail-food');
			$this->load->view('template/footer');
		}
	}
}
