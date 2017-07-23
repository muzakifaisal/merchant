<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MerchantModel extends CI_Model {
	public function addMerchant($data) {
		$this->db->insert('merchant',$data);
	}
	public function getMerchant() {
		$this->db->select('*')
				 ->from('merchant');
		return $this->db->get();
	}
	public function getMerchantId($id) {
		$this->db->select('*')
				 ->from('merchant')
				 ->where('ID_MERCHANT',$id);
		return $this->db->get();
	}
	public function deleteMerchant($id) {
		$this->db->where('ID_MERCHANT',$id)
				 ->delete('merchant');
	}
	public function editMerchant($id,$data) {
		$this->db->where('ID_MERCHANT',$id)
				 ->update('merchant',$data);
	}

}