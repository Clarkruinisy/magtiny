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
	"reportRunningStatus" 	=> true,
	// Custom opening session automatically here.
	"sessionAutoStart"		=> true,
	// Custom returns data format.
	"contentType"			=> "text/html",
	// Custom default router here.
	"defaultRouter"			=> "/index/index",
];

