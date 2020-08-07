<?php

	class Estados_model extends CI_Model {
	public function buscaTodos(){
		return $this->db->get("estados")->result_array();
	}

	public function getRandomStates() {
		$this->db->order_by('rand()');
		$this->db->limit(10);
		$query = $this->db->get('estados');
		return $query->result_array();
	}
}