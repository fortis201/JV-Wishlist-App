<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->model('wishlist');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login');
	}

	function create() {
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|alpha');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|alpha_dash|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
		if($this->form_validation->run() == false) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/');
		}
		else {
			$this->user->create(array(
				'first_name'=> $this->input->post('first_name'),
				'last_name'=> $this->input->post('last_name'),
				'username'=> $this->input->post('username'),
				'email'=> $this->input->post('email'),
				'password'=> $this->input->post('password')
				));
			$this->session->set_userdata('username', $this->input->post('username'));
			$credentials = $this->user->read_by_username($this->input->post('username'));
			$this->session->set_userdata('id', $credentials['id']);
			$this->session->set_flashdata('success', "<p class='error'>You have successfully registered!</p>");
			redirect('/wishlists');
		}
	}

	function login() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/');
		}
		else {
			// var_dump($this->input->post());
			// die();
			$credentials = $this->user->read_by_username($this->input->post('username'));
			// var_dump($credentials);
			// die();
			if($this->input->post('username') == $credentials['username'] && md5($this->input->post('password')) == $credentials['password']) {
				$this->session->set_userdata('username', $this->input->post('username'));
				$this->session->set_userdata('id', $credentials['id']);				
				redirect('/wishlists');
			}
			else {
				$this->session->set_flashdata('errors', 'Invalid username or password.');
				redirect('/');
			}
		}		
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}
}

//end of main controller