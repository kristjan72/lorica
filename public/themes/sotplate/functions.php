<?php

declare(strict_types=1);

// Register plugin helpers.
require_once template_path('library/assets.php');
require_once template_path('library/better-wp-security.php');
require_once template_path('library/normalizer.php');

require_if_theme_supports('sotplate-bladerunner', template_path('library/bladerunner.php'));
require_if_theme_supports('sotplate-cookie-bar', template_path('library/cookie-bar.php'));
require_if_theme_supports('sotplate-no-touch', template_path('library/no-touch.php'));
require_if_theme_supports('sotplate-pixel', template_path('library/pixel.php'));
require_if_theme_supports('sotplate-polylang', template_path('library/polylang.php'));
require_if_theme_supports('sotplate-soil', template_path('library/soil.php'));
require_if_theme_supports('sotplate-svg', template_path('library/svg.php'));
