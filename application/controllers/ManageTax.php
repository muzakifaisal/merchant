<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ManageTax extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('TaxModel');
		$this->auth->restrictAccess('administrator');
	}
	public function index() {
		$content = array(
			'title'		=> 'Manage Tax'
		);
		$data['taxData'] = $this->TaxModel->getTax();
		$this->layout->adminPage('admin/tax',$content,$data);
	}
	public function addTax() {
		$data = array(
			'NAMETAX'		=> $this->input->post('taxName'),
			'PRECENTAGE'	=> $this->input->post('precentage')
		);
		$this->TaxModel->addTax($data);
		redirect(base_url('admin/tax'));
	}
	public function deleteTax() {
		$idTax = $this->uri->segment(4);
		$this->TaxModel->deleteTax($idTax);
		redirect(base_url('admin/tax'));
	}
	public function editTax() {
		$idTax = $this->input->post('idTax');
		$data = array(
			'NAMETAX'		=> $this->input->post('editTaxName'),
			'PRECENTAGE'	=> $this->input->post('editPrecentage'),
			//'STATUS'		=> $this->input->post('editStatus')
		);
		$this->TaxModel->editTax($idTax,$data);
		redirect(base_url('admin/tax'));
	}
}