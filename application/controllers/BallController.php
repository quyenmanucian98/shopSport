<?php


class BallController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BallModel');
	}

	public function uploadImage($image)
	{
		$config['upload_path'] = './ball';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$this->upload->do_upload($image);
		return $this->upload->data();
	}

	public function formAdd()
	{
		$this->load->view('ball/formAdd');
	}

	public function create()
	{
		$image = $this->uploadImage('imageball');
		$shoes = array(
			'titleball' => $this->input->post('titleball'),
			'priceball' => $this->input->post('priceball'),
			'imageball' => implode(" ", $image)
		);
		if ($this->ShoesModel->add($shoes)) {
			redirect('home');
		} else {
			$this->session->set_flashdata('upload-clothes-fail', 'Thêm sản phẩm thất bại, vui lòng kiểm tra lại');
			$this->load->view('ball/formAdd');
		}
	}
}
