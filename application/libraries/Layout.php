<?php 

class Layout {
	var $CI;
	public function __construct() {
		$this->CI =& get_instance();
	}
	public function defaultPage($page,$content = NULL,$data = NULL) {
		$this->CI->load->view('pages/navbar',$content);
		$this->CI->load->view($page,$data);
		$this->CI->load->view('pages/footer');
	}
	public function adminPage($page,$content = NULL,$data = NULL) {
		$this->CI->load->view('admin/navbar',$content);
		$this->CI->load->view($page,$data);
		$this->CI->load->view('admin/footer');
	}
	public function merchantPage($page,$content = NULL,$data = NULL) {
		$this->CI->load->view('merchant/navbar',$content);
		$this->CI->load->view($page,$data);
		$this->CI->load->view('merchant/footer');
	}
	public function cashierPage($page,$content = NULL,$data = NULL) {
		$this->CI->load->view('cashier/navbar',$content);
		$this->CI->load->view($page,$data);
		$this->CI->load->view('cashier/footer');
	}
}
