<?php

namespace App\Http\Controllers\Wx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\WeiXinModel;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Client;
class WxController extends Controller
{
    protected $access_token;
    /**
     * 处理接入
     */
    public function wechat()
    {
        $token = '2259b56f5898cd6192c50';       //开发提前设置好的 token
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $echostr = $_GET["echostr"];
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if ($tmpStr == $signature) {        //验证通过
            echo $echostr;
        } else {
            die("not ok");
        }
    }

    /**
     * 接收微信推送事件
     *//
    public function receiv()
    {
        $log_file = "wx.log";
     //将接收的数据记录到日志文件
       $data = json_ encode($_POST);
       file_put_contents($log_file,$data,FILE_APPEND); //追击写



    }







    /**
     *获取用户基本信息
     *//
    public function getUserInfo(){
         $url = '';
    }
}
