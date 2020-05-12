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
		$config['upload_path'] = './upload';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$image = $this->upload->data();

		$phone = array(
			'name' => $this->input->post('name'),
			'type_id' => $this->input->post('type_id'),
			'user_id' => $this->input->post('user_id'),
			'color' => $this->input->post('color'),
			'price' => $this->input->post('price'),
			'cpacity' => $this->input->post('cpacity'),
			'avatar' => implode(" ", $image)
		);
		if (empty($_FILES['image']['name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}
		if ($this->form_validation->run()) {
			$this->PhoneModel->add($phone);
		} else {
			$data['types'] = $this->TypeModel->getAll();
			return $this->load->view('phone/formAdd', $data);
		}

		redirect('home');
	}
}
