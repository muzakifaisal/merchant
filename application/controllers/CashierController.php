<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CashierController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->auth->restrictAccess('cashier');
	}
	public function index() {
		$this->layout->cashierPage('cashier/cashier-home');
	}
}