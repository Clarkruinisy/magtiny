<?php

/**
 * Configure the custom config parameters here. Please notice config
 * parameters here will override the framewrok default configurations.
 * View the system default configuration parameters use following method
 * \magtiny\application\render::config();
 */

return [
	// Turn off debug mode in production environment.
	"debug"					=> true,
	// Server running report is only used in API mode.
	"reportRunningStatus"	=> true,
	// Custom default router here.
	"defaultRouter"			=> "/index/index",
	// Service register
	"services" 				=> [
		[\magtiny\framework\render::class, "prepare"],
		[\magtiny\framework\debugger::class, "prepare"],
		// [\magtiny\framework\session::class, "prepare"],
	],
];

