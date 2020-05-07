<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Capture extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User');
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

	public function aksi()
	{
		$this->load->view('capture');
		$this->load->view('main');
	}
	public function save()
	{
		$nama_lengkap = $this->input->post('nama_lengkap', true);
		$kontak = $this->input->post('kontak', true);
		$email = $this->input->post('email', true);
		$alamat = $this->input->post('alamat', true);
		$id_card = $this->input->post('id_card', true);
		$nomer_id = $this->input->post('nomer_id', true);
		$bertemu_dengan = $this->input->post('bertemu_dengan', true);
		$keperluan = $this->input->post('keperluan', true);
		
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE

		$config['cacheable']	= true; //boolean, the default is true
		$config['cachedir']		= './assets/'; //string, the default is application/cache/
		$config['errorlog']		= './assets/'; //string, the default is application/logs/
		$config['imagedir']		= './assets/images/'; //direktori penyimpanan qr code
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$image_name=$nomer_id.'.png'; //buat name dari qr code sesuai dengan nim

		$params['data'] = $nomer_id; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); 

		$image = $this->input->post('image');
		$image = str_replace('data:image/jpeg;base64,','', $image);
		$image = base64_decode($image);
		$filename = 'image_'.time().'.png';
		file_put_contents(FCPATH.'/uploads/'.$filename,$image);
		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'kontak' => $kontak,
			'email' => $email,
			'alamat' => $alamat,
			'id_card' => $id_card,
			'nomer_id' => $nomer_id,
			'bertemu_dengan' => $bertemu_dengan,
			'keperluan' => $keperluan,
			'image' => $filename,
			'qr_code' => $image_name,
		);
		
		$this->load->model('user');
		$res = $this->user->insert($data);
		echo json_encode($res);


	}

	public function qrcode()
	{
		$data["get_all_visitor"] = $this->User->get_all_visitor()->result();
    

		$this->load->view('qr', $data);
	}

}

/* End of file Capture.php */
/* Location: ./application/controllers/Capture.php */