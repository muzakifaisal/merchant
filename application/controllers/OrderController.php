<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->auth->restrictAccess('merchant');
	}
	
}