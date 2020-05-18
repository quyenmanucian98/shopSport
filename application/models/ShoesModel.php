<?php


class ShoesModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getAllShoes()
	{
		return $this->db->get('shoes')->result();
	}
}
