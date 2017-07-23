<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaxModel extends CI_Model {
	public function getTax() {
		$this->db->select('*')
				 ->from('tax');
		return $this->db->get();
	}
	public function addTax($data) {
		$this->db->insert('tax',$data);
	}
	public function deleteTax($idTax) {
		$this->db->where('ID_TAX',$idTax)
				 ->delete('tax');
	}
	public function editTax($idTax,$data) {
		$this->db->where('ID_TAX',$idTax)
				 ->update('tax',$data);
	}
}