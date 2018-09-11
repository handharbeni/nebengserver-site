<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'modules/main/controllers/Api.php');
class Main extends MX_Controller {
	private $api;
	private $connection;
    function __construct() {
        parent::__construct();
        $this->api = new Api();
        $this->output->delete_cache();
        $this->connection = $this->checkConnnection()/*?'on':'off'*/;
    }
    public function testCheck(){
    	var_dump($this->connection); 
    }
	public function index()
	{
		$requestPackages = $this->api->getAllPackages();
		$requestTheme = $this->api->getAllTheme();
		$resultPackages = json_decode($requestPackages->body,true);
		$resultTheme = json_decode($requestTheme->body,true);
		
		$data['resultPackages'] = $resultPackages['results'];
		$data['resultTheme'] = $resultTheme['results'];
		$data['content'] = 'html/content/home';
		$data['current'] = 'home';

		$this->load->view('html/html', $data);
	}

	public function contact(){
		$data['content'] = 'html/content/contact';
		$data['current'] = 'contact';
		$this->load->view('html/html', $data);		
	}

	public function about(){
		$data['content'] = 'html/content/about';
		$data['current'] = 'page';
		$this->load->view('html/html', $data);
	}

	public function login(){
		$data['content'] = 'html/content/login';
		$data['current'] = 'page';
		$this->load->view('html/html', $data);
	}

	public function register(){
		$data['content'] = 'html/content/register';
		$data['current'] = 'page';
		$this->load->view('html/html', $data);
	}


	public function wp(){
		$data['content'] = 'html/content/wp';
		$data['current'] = 'wp';
		$this->load->view('html/html', $data);
	}

	public function logout(){

	}

	public function getDetailPackage($id){
		echo $this->api->detailPackage($id)->body;
	}

	public function doLogin(){
		$post = $this->input->post();
		$response = $this->api->postLogin($post['username'], $post['password']);
		$encodingResponse = json_decode($response, true);
		// echo $encodingResponse['body'];
		if ($encodingResponse['auth']) {
			$newSession = array(
					'isLoggedIn' => true,
					'token' => $encodingResponse['token']
				);
			// redirect ke halaman admin
			$this->session->set_userdata($newSession);
			header("location:".base_url("client/main/index"));
		}else{
			$newSession = array(
					'isLoggedIn' => false,
					'token' => 'null'
				);
			$this->session->set_userdata($newSession);
			// redirect halaman login menggunakan flash data
			$this->session->set_flashdata('status', 'alert');
			$this->session->set_flashdata('message', 'Gagal, Username / Password tidak sesuai');
			header("location:".base_url("main/login"));
		}
		// redirect ke halaman admin
	}
	public function doRegister(){
		$post = $this->input->post();
		$request = $this->api->postRegister($post);
		if ($request) {
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('message', 'Sukses, Silakan Login');
		}else{
			$this->session->set_flashdata('status', 'alert');
			$this->session->set_flashdata('message', 'Gagal / Sudah Teregistrasi, Silakan Coba Lagi');
		}
		header("location:".base_url('main/register'));
	}
	private function checkConnnection(){
		return $this->api->checkServer();
	}
}