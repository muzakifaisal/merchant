<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->auth->restrictAccess('administrator');
	}
	public function index() {
		$this->layout->adminPage('admin/index');
	}
	//public function merchant() {
	//	$content = array(
	//		'title'		=> 'Manage Merchant'
	//	);
	//	$this->layout->adminPage('admin/merchant',$content);
	//}
	//public function cashier() {
		//$content = array(
		//	'title'		=> 'Manage Cashier'
		//);
		//$this->layout->adminPage('admin/cashier',$content);
	//}
	//public function tax() {
	//	$content = array(
	//		'title'		=> 'Manage Tax'
	//	);
	//	$this->layout->adminPage('admin/tax',$content);
	//}
}
