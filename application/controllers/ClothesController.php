<?php


class ClothesController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClothesModel');
	}

	public function home()
	{
		return $this->load->view('viewMaster');
	}
}
