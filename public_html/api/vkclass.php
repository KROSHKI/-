<?php

namespace arku;

class Vk(){
	protected $appid = 6462053;//id
	protected $protectedkey = "9EqpeuN1bseu1MWBnHCJ";//секретный ключ
	protected $token;
	protected $url = "https://api.пермьонлайн.рф/vk.php";

	public function autorizeUrl(){
		$auth = "https://oauth.vk.com/authorize?client_id={$this->appid}&client_secret={$this->protectedkey}";
		$auth.= "?v=5.63&response_type=code&redirect_uri={$this->url}";
		$auth.="&scope=email";
		return $auth;
	}
	public function accessToken(){
		$params = http_build_query([
			'client_id' => $this->appid,
			'client_secret' => $this->protectedkey,
			'redirect_uri' => $this->url,
			'code' => $code
		]);
		$url = "https://oauth.vk.com/access_token?".$params;
		$response = file_get_contents($url);
		$data = json_decode($response,true);
		rerurn $data;
	}
}
?>