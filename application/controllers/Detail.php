<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index()
	{
        $data = [
            'pageTitle' => 'UniHealth | Food Details'
        ];

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('detail');
		$this->load->view('template/footer');
	}
}
