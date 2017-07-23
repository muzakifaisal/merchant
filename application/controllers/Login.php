<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('Auth');
	}
	public function index() {
		$this->load->view('admin/login');
	}
	public function authentication() {
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$this->auth->loginAuth($user,$pass);
	}
	public function logout() {
		session_destroy();
		redirect(base_url());
	}
}
