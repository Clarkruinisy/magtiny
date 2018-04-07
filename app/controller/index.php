<?php

namespace app\controller;

use magtiny\framework\controller;
use magtiny\framework\globals;
use magtiny\framework\session;
use magtiny\framework\render;
use magtiny\framework\config;

use app\model\index as indexTable;


class index extends controller
{
	public function index ()
	{
		$this->assign("header", "Magtiny header");
		$this->assign("footer", "Magtiny footer");
		$this->assign("content", "Magtiny content");
		return $this->view();
	}

	public function param ()
	{
		$data = [
			"config" => config::config(),
			"get" => globals::get(),
			"post" => globals::post(),
			"input" => globals::input(),
			"files" => globals::files(),
			"session" => globals::session(),
			"server" => globals::server()
		];
		return $this->render(10000, true, $data);
	}

	public function model ()
	{
		return indexTable::instance()->index();
	}
}

