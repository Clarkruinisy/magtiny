<?php

namespace app\controller;

use magtiny\framework\controller;
use magtiny\framework\globals;
use magtiny\framework\session;
use magtiny\framework\config;
use magtiny\tool\apiManager;

/**
 * @controller 首页信息
 * @path index
**/
class index extends controller
{
	public function index ()
	{
		$this->assign("content", "magtinyPHP");
		$this->assign("header", "magtiny Header");
		$this->assign("footer", "magtiny Footer");
		$result = $this->view("index/index");
		return [];
		return $result;
	}

	/**
	 * @action 		参数信息
	 * @name 		index
	 * @method 		post
	 * @param 		*userID				11e7f82e6e94b511 			get
	 * @param 		userName			张三驴
	 * @file 		portrait
	 * @label 		login
	**/
	public function param ()
	{
		return globals::get();
	}

	/**
	 * @action 		参数信息
	 * @name 		model
	 * @method 		post
	 * @param 		*userID				11e7f82e6e94b517
	 * @param 		userName			张三驴
	 * @file 		portrait
	**/
	public function model ()
	{
		return \app\model\index::instance()->index();
	}

	public function session ()
	{
		session::set("c", "d");
		return globals::session();
	}

	public function manager ()
	{
		$config = [
			"dir" => __DIR__.DIRECTORY_SEPARATOR,
			"url" => "http://47.92.64.71:8001/",
			"secret" => "111111",
			"codeMap" => config::message(),
			"sessionUse" => "post",
			"sessionKey" => "PHPSESSID"
		];
		$apiManager = new apiManager($config);
		return $apiManager->start();
	}
}