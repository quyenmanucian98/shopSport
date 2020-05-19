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

	public function add($shoes)
	{
		return $this->db->insert('shoes', $shoes);
	}

	public function getShoesById($id)
	{
		return $this->db->query("SELECT * FROM shoes where id=" . $id)->row();
	}
}
