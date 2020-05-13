<?php


class ClothesController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClothesModel');
		$this->load->model('TypeModel');
	}

	public function home()
	{
		return $this->load->view('viewMaster');
	}

	public function formAdd()
	{
		$data['types'] = $this->TypeModel->getAll();
		return $this->load->view('clothes/formAdd', $data);
	}

	public function create()
	{
		$config['upload_path'] = './clothes';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$image = $this->upload->data();

		$phone = array(
			'title' => $this->input->post('title'),
			'price' => $this->input->post('price'),
			'numbers' => $this->input->post('numbers'),
			'type_id' => $this->input->post('type_id'),
			'avatar' => implode(" ", $image)
		);
			$this->PhoneModel->add($phone);

		redirect('home');
	}
}
