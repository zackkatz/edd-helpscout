<?php

namespace EDD\HelpScout;

defined( 'ABSPATH' ) or exit;

// define some default constants
require __DIR__ . '/includes/default-constants.php';

// Load autoloader
require __DIR__ . '/vendor/autoload.php';

// Load default API actions
require __DIR__ . '/includes/default-actions.php';

// Check for API actions
if( ! is_admin() ) {
	add_action( 'init', 'EDD\\HelpScout\\listen_for_actions' );
}