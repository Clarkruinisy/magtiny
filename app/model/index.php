<?php

namespace app\model;

use magtiny\framework\model;


class index extends model
{
	public function index ()
	{
		$sql = "SELECT UUID()";
		return $this->query($sql)->fetchColumn();
	}
}