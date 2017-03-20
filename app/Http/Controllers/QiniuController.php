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
	  	//空间名
	  	$this->auth = new Auth($accessKey, $secretKey);
	  	//生产上传token
	  	$this->token = $this->auth->uploadToken($bucket);
	  	//构建UploadManager对象
	  	$this->uploadMgr = new UploadManager();
	  	//初始化BucketManager
  		$this->bucketMgr = new BucketManager($this->auth);
	}

    public function index()
    {
	  	//获取列表数据
    }

    public function upload()
    {
    	return view('upload',['token'=>$this->token]);
    }
}
