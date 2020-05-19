<?php


class ClothesController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClothesModel');
		$this->load->model('TypeModel');
		$this->load->model('ShoesModel');
	}

	public function home()
	{
		$data['clothesCts'] = $this->ClothesModel->getClothesCt();
		$data['clothesClbs'] = $this->ClothesModel->getClothesClb();
		$data['listShoes'] = $this->ShoesModel->getAllShoes();
		return $this->load->view('viewMaster', $data);
	}

	public function formAdd()
	{
		$data['types'] = $this->TypeModel->getAll();
		return $this->load->view('clothes/formAdd', $data);
	}

	public function uploadImage($image)
	{
		$config['upload_path'] = './clothes';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$this->upload->do_upload($image);
		return $this->upload->data();
	}

	public function create()
	{
		$image = $this->uploadImage('image');
		$clothes = array(
			'title' => $this->input->post('title'),
			'price' => $this->input->post('price'),
			'numbers' => $this->input->post('numbers'),
			'type_id' => $this->input->post('type_id'),
			'image' => implode(" ", $image)
		);
		if ($this->ClothesModel->add($clothes)) {
			redirect('home');
		} else {
			$this->session->set_flashdata('upload-clothes-fail', 'Thêm sản phẩm thất bại, vui lòng kiểm tra lại');
			$this->load->view('clothes/formAdd');
		}
	}

	public function clothesDetail($id)
	{
		$data['clothesById'] = $this->ClothesModel->getClothesById($id);
		$this->load->view('clothes/clothesDetail', $data);
	}

	public function createClothesCT()
	{

	}
}
