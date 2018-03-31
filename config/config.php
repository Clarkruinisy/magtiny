<?php

return [
	"debug"				=> true,
	"path"				=> "app",
	"filters" 			=> ['trim', 'addslashes', 'htmlentities'],
	"errorIgnore"		=> "系统运行错误, 请联系管理员!",
	"errorTemplate"		=> "出错了!<br />错误信息: {{message}}.<br />出错文件: {{file}}({{line}}).",
];