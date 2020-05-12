<?php


class ClothesModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function add($clothes)
	{
		return $this->db->insert('clothes', $clothes);
	}
}
