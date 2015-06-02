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
		echo session('token');
		// echo (json_decode($result)->access_token);		
    }

     public function token(){
     	echo session('token');
     }
     public function upimage(){
     	$this->display();
     }
     public function upimagereceive(){
        $type="image";
        $access_token=session('token');
		$filepath=$_POST["image"];
		echo $filepath;
		$filedata=array("media" => "@".$filepath);
		$url="https://api.weixin.qq.com/cgi-bin/media/upload?access_token=$access_token&type=$type";
		$res=$this->https_request($url,$filedata);
		$resource=json_decode($res);
		$data["href"]=$_POST["image"];
		$data["type"]=$type;
		$data["media_id"]=$resource->media_id;
		$data["createtime"]=$resource->created_at;
		M("resource")->data($data)->add();
		var_dump(json_decode($res));
     }
     public function main(){
     	$this->display();
     }
}