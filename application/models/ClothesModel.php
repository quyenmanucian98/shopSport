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

	public function getClothesClb()
	{
		return $this->db->query("SELECT * FROM clothes WHERE type_id = 1")->result();
	}

	public function getClothesById($id)
	{
		return $this->db->query("SELECT * FROM clothes WHERE id=" . $id)->row();
	}
}
