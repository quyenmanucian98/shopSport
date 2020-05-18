<?php


class BallModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getAllBall()
	{
		return $this->db->get('balls')->result();
	}
}
