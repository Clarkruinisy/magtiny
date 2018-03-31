<?php

namespace app\controller;

use magtiny\framework\controller;
use magtiny\framework\globals;
use magtiny\framework\session;


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

	public function param ()
	{
		return globals::get();
	}

	public function model ()
	{
		return \app\model\index::instance()->index();
	}

	public function session ()
	{
		session::set("c", "d");
		return globals::session();
	}
}