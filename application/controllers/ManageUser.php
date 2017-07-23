<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUser extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
		$this->auth->restrictAccess('administrator');
	}
	public function index() {
		$content = array(
			'title'		=> 'Manage Cashier'
		);
		$data['cashierData'] = $this->UserModel->getUserParam('ROLE','cashier');
		$this->layout->adminPage('admin/cashier',$content,$data);
	}
	public function addCashier() {
		$data = array(
			'NAME'		=> $this->input->post('fullName'),
			'USERNAME'	=> $this->input->post('username'),
			'PASSWORD'	=> $this->auth->salt($this->input->post('password')),
			'ROLE'		=> 'cashier'
		);
		$this->UserModel->addUser($data);
		redirect(base_url('admin/cashier'));
	}
	public function editCashier() {
		$check = array(
			'ID_USER'	=> $this->input->post('idUser'),
			'PASSWORD'	=> $this->auth->salt($this->input->post('oldPassword'))
		);
		$result = $this->UserModel->passCheck($check)->num_rows();
		if($result == 1) {
			$idUser = $this->input->post('idUser');
			$data = array(
				'NAME'		=> $this->input->post('editFullName'),
				'USERNAME'	=> $this->input->post('editUsername'),
				'PASSWORD'	=> $this->auth->salt($this->input->post('newPassword'))
			);
			$this->UserModel->editUser($idUser,$data);
			redirect(base_url('admin/cashier'));
		} else {
			echo "<script>alert('Wrong Old Password');window.location='".base_url('admin/cashier')."'</script>";
		}
	}
	public function deleteUser() {
		$idUser = $this->uri->segment(4);
		$this->UserModel->deleteUser($idUser);
		redirect(base_url('admin/cashier'));
	}
}