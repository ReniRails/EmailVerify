<?php 


class Constans
{
	const api_endpoint	= 'https://www.renirails.id';
	const api_password	= 'ReniRadsils (https://www.renirails.id)';
}

class Request
{
	public function CurlGet($url, $headers){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
        curl_close($ch);
        return $response;
	}
}

class Email{
	
	protected $email;
	
	public function __construct($email = null){
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			exit("Email Format Not Valid");
		}
		
		$this->email = $email;
	}
	
	public function verify(){
		$headers = array(
			'request_key: ' . Constans::api_password,
		);
		return Request::CurlGet(Constans::api_endpoint . "/api/v2.0/isEmailReal/" . $this->email, $headers);
	}
}
