<?php
namespace Home\Controller;
use Think\Controller;
class AjaxController extends Controller {
    
    public function looktestcontenttest(){
       
    }
    public function delete(){
       $data["type"]="shouttype";
       $data1["text"]=0;
       $shouttype=M("config")->where($data)->save($data1);
    }
    public function add(){
       $data["type"]="shouttype";
       $data1["text"]=1;
       $shouttype=M("config")->where($data)->save($data1);
    }
}