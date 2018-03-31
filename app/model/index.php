<?php

namespace app\model;

use magtiny\framework\model;


class index extends model
{
	public function index ()
	{
		$sql = "SELECT `id`, `location` FROM `documents`";
		return $this->query($sql)->fetchAll();
	}
}