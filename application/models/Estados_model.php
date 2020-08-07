<?php

class Estados_model extends CI_Model {
	public function buscaTodos(){
		return $this->db->get("estados")->result_array();
	}
}