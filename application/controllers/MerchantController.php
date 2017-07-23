<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MerchantController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->auth->restrictAccess('merchant');
	}
	public function index() {
		$this->layout->merchantPage('merchant/index');
	}
	public function manageMenu() {
		$content = array(
			'title' => 'Manage Menu'
		);
		$this->layout->merchantPage('merchant/manage-menu',$content);
	}
	public function addMenu() {
		//$data = array(
		//	'ID_MERCHANT'
		//	'NAMAMENU'
		//	'MENUPRICE'
		//	'MENUCATEGORY'
		//	'MENUDETAIL'
		//	'MENUIMG'
		//);
	}
	public function test() {
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
	}
}