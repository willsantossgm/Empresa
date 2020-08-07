<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estados extends CI_Controller {

	public function index(){
		$this->load->model("Estados_model");
		$lista = $this->Estados_model->buscaTodos();
		$dados = array("estados" => $lista);
		$this->load->view('estados/index', $dados);
	}
}
