<?php
class Auth {
	var $CI;
	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->library('session');
		$this->CI->load->model('AuthModel');
	}
	public function salt($pass) {
		return hash("haval256,5", $this->CI->config->item('encryption_key')."bebasdah".$pass);
	}
	public function loginAuth($user,$pass) {
		$dataLogin = array(
			'username'	=> $user,
			'password'	=> $this->salt($pass)
		);
		$result = $this->CI->AuthModel->loginCheck($dataLogin);
		if($result->num_rows() == 1) {
			$dataSession = array(
				'idUser' 	=> $result->first_row()->ID_USER,
				'namaUser'	=> $result->first_row()->NAME,
				'role'		=> $result->first_row()->ROLE,
			);
			$this->CI->session->set_userdata($dataSession);
			redirect(base_url($_SESSION['role']));
		} else {
			echo "<script>alert('Username atau password salah');</script>";
			echo "<script>window.location='".base_url('login')."';</script>";
		}
	}
	public function restrictAccess($role) {
		$loginRole = $this->CI->session->userdata('role');
		if($role != $loginRole) {
			echo "<script>alert('Tidak memiliki akses ke halaman ini')</script>";
			$this->isLogin();
			//echo "<script>window.location='".base_url('login')."'</script>";
		}
	}
	public function isLogin() {
		if(isset($_SESSION['role']) == 1) {
			echo "<script>window.location='".base_url($_SESSION['role'])."'</script>";
		} else {
			echo "<script>window.location='".base_url('login')."'</script>";
		}
	}

}