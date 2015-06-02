<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	function https_request($url,$data = null){
		    $curl = curl_init();
		    curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		    if (!empty($data)){
		        curl_setopt($curl, CURLOPT_POST, 1);
		        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		    }
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		    $output = curl_exec($curl);
		    curl_close($curl);
		    return $output;
		}
    public function index(){

        $appid='wx44f0661e84ccd71e';
		$appsecret='482d88c53826d7de02a604aca111a021';
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
		$result =$this->https_request($url, $jsonmenu);
		session('token',json_decode($result)->access_token);
		// echo (json_decode($result)->access_token);		
    }

     public function token(){
     	echo session('token');
     }
}