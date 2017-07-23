<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	public function getUser() {
		$this->db->select('*')
				 ->from('user');
		return $this->db->get();
	}
	public function getUserParam($param,$val) {
		$this->db->select('*')
				 ->from('user')
				 ->where($param,$val);
		return $this->db->get();
	}
	public function addUser($data) {
		$this->db->insert('user',$data);
	}
	public function deleteUser($id) {
		$this->db->where('ID_USER',$id)
				 ->delete('user');
	}
	public function passCheck($data) {
		return $this->db->get_where('user',$data);
	}
	public function editUser($id,$data) {
		$this->db->where('ID_USER',$id)
				 ->update('USER',$data);
	}
}