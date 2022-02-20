<?php
class Profile extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

    public function index()
	{
		$data = [
			'pageTitle' => "UniHealth | Home",
			'user' => $this->user_model->getUserLoginData(),
		];

        if($this->session->userdata('user_email')) {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar-login');
			$this->load->view('profile');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('profile');
			$this->load->view('template/footer');
		}
	}

	public function edit()
	{
			
		$data = [
			'pageTitle' => "UniHealth | Edit User",
			'user' => $this->user_model->getUserLoginData(),
		];
			$this->form_validation->set_rules('user_name', 'name', 'required');
			$this->form_validation->set_rules('user_phone', 'phone', 'required');
			$this->form_validation->set_rules('user_address', 'address', 'required');
			if ($this->form_validation->run() == FALSE) {
				if($this->session->userdata('user_email')) {
					$this->load->view('template/header', $data);
					$this->load->view('template/navbar-login');
					$this->load->view('edit_user');
					$this->load->view('template/footer');
				} else {
					$this->load->view('template/header', $data);
					$this->load->view('template/navbar');
					$this->load->view('edit_user');
					$this->load->view('template/footer');
				}
			} 
	}

	public function editUser()
		{
		$email		= $this->input->post('user_email');
		$nama		= $this->input->post('user_name');
		$address	= $this->input->post('user_address');
		$phone		= $this->input->post('user_phone');
		$gambar		= $_FILES['user_photo']['name'];

		if ($gambar =''){}else{
			$config ['upload_path'] 		= './upload/user/';
			$config ['allowed_types'] 		= 'jpg|jpeg|png|svg|gif';
			$config ['max_size'] 			= '3072';
			$config ['overwrite'] 			= TRUE;
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('user_photo')){
				echo "Gambar gagal diupload !";
			}else{
				$gambar	=	$this->upload->data('file_name');
			}
		}

		$data = array(
			'user_name'			=> $nama,
			'user_address'		=> $address,
			'user_phone'		=> $phone,
			'user_photo'		=> $gambar
		);

		$where = array(
			'user_email'	=> $email
		);

		$this->user_model->update_data($where, $data, 'uhe_user');
		redirect('profile');
		}
}
