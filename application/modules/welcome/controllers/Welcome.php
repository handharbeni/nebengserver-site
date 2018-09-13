<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'modules/welcome/controllers/Api.php');
class Welcome extends MX_Controller {
	private $api;
    function __construct() {
        parent::__construct();
        $this->api = new Api();
        $this->output->delete_cache();
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
