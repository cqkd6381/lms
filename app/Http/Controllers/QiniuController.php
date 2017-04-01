<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;
use Qiniu\Processing\PersistentFop;

class QiniuController extends Controller
{

	public $auth = null;
	public $token = null;
	public $uploadMgr = null;
	public $bucketMgr = null;

	public function __construct()
	{
		// 用于签名的公钥和私钥
	  	$accessKey = '9RxNVlP55OeMlyzAzi16tYBPjk1yygeWf04ta9Lg';
	  	$secretKey = 'hB_cv7m7HNJ4nHrRkvoMs0rCU9SydoP2PIhlECTr';
	  	$bucket = 'ibestservice';
	  	$bucket2 = 'ibs-class';
	  	//空间名
	  	$this->auth = new Auth($accessKey, $secretKey);
	  	//生产上传token
	  	$this->token = $this->auth->uploadToken($bucket2);
        //构建UploadManager对象
        $this->uploadMgr = new UploadManager();
        //初始化BucketManager
        $this->bucketMgr = new BucketManager($this->auth);


    }

    /**
     * FFFFFF
     */
    public function index()
    {
//        https://cdn.laravist.com/1-master-regular-expression-simple-starting-point.mp4?e=1491027598&token=Q-gvg3xjxOuJna1scAgKcVHUPH6wsFRIgC6mTsbD:LXf9hXssWx69Qgsv8eXcIUdFLmQ=
//        http://onprvhi7s.bkt.clouddn.com/video/bigdata/Linux%E5%9F%BA%E7%A1%806.mp4?e=1491024452&token=9RxNVlP55OeMlyzAzi16tYBPjk1yygeWf04ta9Lg:oECl4GtANmDw0bg6P0k9mJf0Cmw=


        //http://class.cqkd6381.com/video/bigdata/Linux%E5%9F%BA%E7%A1%806.mp4
        $baseUrl = 'http://onprvhi7s.bkt.clouddn.com/video/bigdata/Linux%E5%9F%BA%E7%A1%806.mp4';
        //下载凭证
        $url = $this->auth->privateDownloadUrl($baseUrl, $expires = 70);

	  	//获取列表数据
        return $url;
    }

    public function getUrl()
    {
//        $baseUrl = 'http://onprvhi7s.bkt.clouddn.com/video/bigdata/Linux%E5%9F%BA%E7%A1%806.mp4';
        $baseUrl = 'http://cdn.ibestservice.com/video/bigdata/Linux%E5%9F%BA%E7%A1%806.mp4';
        //下载凭证
        $url = $this->auth->privateDownloadUrl($baseUrl, $expires = 3600);
        //获取列表数据
        return $url;
    }

    public function upload()
    {
    	return view('upload',['token'=>$this->token]);
    }
}
