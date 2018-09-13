<?php
require_once '/var/www/html/nebeng_server/Requests/library/Requests.php';
class Api{
	private $headers;
	function __construct(){
		Requests::register_autoloader();
	}
	function me($token){
		$this->fillSession($token);
		$url = URL_NODE_REST."me";
		$requests = Requests::get($url, $this->headers);
		if ($requests->status_code == 200) {
			return $requests;
		}
		return false;
	}
	function updateMe($token, $post){
		$this->fillSession($token);
		$url = URL_NODE_REST."me";
		$requests = Requests::put($url, $this->headers, $post);
		if ($requests->status_code == 200) {
			return $requests;
		}
		return false;
	}
	function services($token){
		$this->fillSession($token);
		$url = URL_NODE_REST."order";
		$requests = Requests::get($url, $this->headers);
		if ($requests->status_code == 200) {
			return $requests;
		}
		return false;
	}
	function payment($token){
		$this->fillSession($token);
		$url = URL_NODE_REST."service";
		$requests = Requests::get($url, $this->headers);
		if ($requests->status_code == 200) {
			return $requests;
		}
		return false;
	}
	function fillSession($token){
		$this->headers = array(
			'Content-Type' => 'application/x-www-form-urlencoded',
			'nebeng-token' => $token
		);
	}
}