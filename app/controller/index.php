<?php

namespace app\controller;

use magtiny\framework\controller;


class index extends controller
{
	public function index ()
	{
		$this->view();
		return [];
	}
}