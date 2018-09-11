<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'modules/client/controllers/Api.php');
class Main extends MX_Controller {
	private $api;
	private $connection;
	private $token;
	private $linkMenu;
    function __construct() {
        parent::__construct();
        $this->api = new Api();
        $this->output->delete_cache();
        $this->checkSession();
        $this->linkMenu = "client/main";
    }
    function login(){
    	$data['content'] = 'client/content/login';
    	// $data['current'] = 'login';
     //    $data['link_menu'] = $this->linkMenu;
    	$this->load->view('html', $data);
    }
    function logout(){
    	$this->session->sess_destroy();
    	header("location:".base_url('client/main/login'));
    }
    function index(){
    	// var_dump($this->token);
    	// var_dump($this->api->me($this->token));
    	// $this->load->view('html');
    	$data['content'] = 'client/content/content';
    	$data['current'] = 'index';
        $data['link_menu'] = $this->linkMenu;
    	$this->load->view('html', $data);
    }
    function user(){
    	// $jsonDecode = $this->api->me($this->token)->body;
    	// var_dump($this->api->me($this->token)->body);
    	// $jsonDecode = json_decode($this->api->me($this->token)->body, true);
    	// $jsonDecode = json_decode($jsonDecode['result'], true);
    	// var_dump($jsonDecode['result'][0]['first_name']);
    	$data['me'] = json_decode($this->api->me($this->token)->body, true);
    	$data['content'] = 'client/content/profile';
    	$data['current'] = 'user';
        $data['link_menu'] = $this->linkMenu;
    	$this->load->view('html', $data);    	
    }
    function update_user(){
        $post = $this->input->post();
        $request = $this->api->updateMe($this->token, $post);
        if (!$request) {
            return true;
            // $this->session->set_flashdata('success', 'true');
            // $this->session->set_flashdata('message', 'update success');
        }else{
            return false;
            // $this->session->set_flashdata('success', 'false');
            // $this->session->set_flashdata('message', 'update failed');
        }
        // header("location:".base_url('client/main/user'));
    }
    function list_order(){
    	$data['listOrder'] = json_decode($this->api->services($this->token)->body, true);
        // var_dump($data);
        // foreach ($data as $row) {
            // var_dump($row['price_unique']);
            // foreach ($row as $key => $value) {
            //     // var_dump($value);
            //     // echo $key[0];
            //     echo "<br>";
            // }
        // }
    	$data['content'] = 'client/content/list_order';
    	$data['current'] = 'list_order';
        $data['link_menu'] = $this->linkMenu;
    	$this->load->view('html', $data);    	
    }
    function list_payments(){
        $data['listPayments'] = json_decode($this->api->payment($this->token)->body, true);
        $data['content'] = 'client/content/list_payments';
        $data['current'] = 'list_payments';
        $data['link_menu'] = $this->linkMenu;
        $this->load->view('html', $data);
    }
    function checkSession(){
    	if (!$this->session->userdata('isLoggedIn')) {
    		header("location:".base_url('main'));
    	}
    	$this->token = $this->session->userdata('token');
    }
}