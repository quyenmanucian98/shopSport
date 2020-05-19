<?php


class ShoesController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShoesModel');
	}

	public function uploadImage($image)
	{
		$config['upload_path'] = './shoes';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$this->upload->do_upload($image);
		return $this->upload->data();
	}

	public function formAdd()
	{
		return $this->load->view('shoes/formAdd');
	}

	public function create()
	{
		$image = $this->uploadImage('imageshose');
		$shoes = array(
			'titleshose' => $this->input->post('titleshose'),
			'priceshose' => $this->input->post('priceshose'),
			'imageshose' => implode(" ", $image)
		);
		if ($this->ShoesModel->add($shoes)) {
			redirect('home');
		} else {
			$this->session->set_flashdata('upload-clothes-fail', 'Thêm sản phẩm thất bại, vui lòng kiểm tra lại');
			$this->load->view('shoes/formAdd');
		}
	}
}
