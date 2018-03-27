<?php

return [
	"debug"				=> true,
	"router"			=> ["index", "index"],
	"filters" 			=> ['trim', 'addslashes', 'htmlentities'],
	"response"			=> "json_encode",
];