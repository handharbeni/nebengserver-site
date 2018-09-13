<?php
require_once './Requests/library/Requests.php';
// require_once '/var/www/html/nebeng_server/Requests/library/Requests.php';
class Api{
	function __construct(){
		Requests::register_autoloader();
	}
	function getAllPackages(){
		$url = URL_NODE_REST."package";
		// return ;
		// $headers = array('Accept' => 'application/json');
		// $options = array('auth' => array('user', 'pass'));
		$request = Requests::get($url);
		if ($request->status_code == 200) {
			return $request;
		}
		return false;
	}
	function getAllTheme(){
		$url = URL_NODE_REST."theme";
		// return ;
		// $headers = array('Accept' => 'application/json');
		// $options = array('auth' => array('user', 'pass'));
		$request = Requests::get($url);
		if ($request->status_code == 200) {
			return $request;
		}
		return false;
	}
	function detailPackage($id = 0){
		if ($id != 0) {
			$url = URL_NODE_REST."package/detail/".$id;
			// return ;
			// $headers = array('Accept' => 'application/json');
			// $options = array('auth' => array('user', 'pass'));
			$request = Requests::get($url);
			if ($request->status_code == 200) {
				return $request;
			}
			return false;
		}
		return false;
	}
	function detailTheme($id = 0){
		if ($id != 0) {
			$url = URL_NODE_REST."theme/detail/".$id;
			// return ;
			// $headers = array('Accept' => 'application/json');
			// $options = array('auth' => array('user', 'pass'));
			$request = Requests::get($url);/*=>domainNommd*/
			if ($request->status_code == 200) {
				return $request;
			}
			return false;
		}
		return false;
	}

	function postLogin($username = null, $password=null){
		if ($username!=null && $password!=null) {
			$data = array('email_address' => $username, 'password' => $password);
			$url = URL_NODE_REST."login";
			$response = Requests::post($url, array(), $data);
			if ($response->status_code == 200) {
				return $response->body;
			}
			return false;
		}
		return false;
	}
	function postRegister($post = null){
		if ($post !=null) {
			$first_name = $post['first_name'];
			$last_name = $post['last_name'];
			$company_name = $post['company_name'];
			$email_address = $post['email_address'];
			$phone_number = $post['phone_number'];
			$password = $post['password'];
			$data = array(
				'first_name' => $first_name, 
				'last_name' => $last_name, 
				'company_name' => $company_name, 
				'email_address' => $email_address, 
				'phone_number' => $phone_number, 
				'password' => $password
				);
			$url = URL_NODE_REST."register";
			$request = Requests::post($url, array(), $data);
			if ($request->status_code == 200) {
				return true;
			}
			return false;
		}
		return false;
	}
	function checkServer(){
		$url = URL_NODE_REST."checkConnection";
		$request = Requests::get($url, array(), array());
		if ($request->status_code == 200) {
			return true;
		}
		return false;
	}
}