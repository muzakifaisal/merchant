<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthModel extends CI_Model {
	public function loginCheck($data) {
		$query = $this->db->get_where('user',$data);
		return $query;
	}
}