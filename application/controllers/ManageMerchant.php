<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageMerchant extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('MerchantModel');
		$this->load->model('UserModel');
		$this->auth->restrictAccess('administrator');
	}
	public function index() {
		$content = array(
			'title'		=> 'Manage Merchant'
		);
		$data['merchantData'] = $this->MerchantModel->getMerchant();
		$this->layout->adminPage('admin/merchant',$content,$data);
	}
	public function addMerchant() {
		$merchantData = array(
			'NAME_MERCHANT'		=> $this->input->post('merchantName'),
			'MERCHANT_CONTENT'	=> $this->input->post('merchantContent')
		);
		$merchantLogin = array(
			'NAME'		=> $this->input->post('merchantName'),
			'USERNAME'	=> $this->input->post('merchantUsername'),
			'PASSWORD'	=> $this->auth->salt('merchant_'.$this->input->post('merchantUsername')),
			'ROLE'		=> 'merchant'
		);
		$this->MerchantModel->addMerchant($merchantData);
		$this->UserModel->addUser($merchantLogin);
		redirect(base_url('admin/merchant'));
	}
	public function editMerchant() {
		$idMerch = $this->input->post('idMerchant');
		$data = array(
			'NAME_MERCHANT'		=> $this->input->post('editMerchantName'),
			'MERCHANT_CONTENT'	=> $this->input->post('editMerchantContent')
		);
		$this->MerchantModel->editMerchant($idMerch,$data);
		redirect(base_url('admin/merchant'));
	}
	public function deleteMerchant() {
		$idMerc = $this->uri->segment(4);
		$this->MerchantModel->deleteMerchant($idMerc);

		redirect(base_url('admin/merchant'));
	}
}