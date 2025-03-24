<?php
/**
 * @copyright   Copyright (C) 2010-2025 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

namespace Combodo\iTop\Portal\Router;

use Combodo\iTop\Portal\Routing\ItopExtensionsExtraRoutes;

/** @noinspection PhpUnhandledExceptionInspection */
ItopExtensionsExtraRoutes::AddRoutes(array(
	array(
		'pattern' => '/SampleTheme/style.css',
		'callback' => 'Combodo\\iTop\\Portal\\Controller\\SampleThemeController::Display',
		'bind' => 'p_sample_theme'
	),
));

ItopExtensionsExtraRoutes::AddControllersClasses(
	array(
		'Combodo\iTop\Portal\Controller\SampleThemeController'
	)
);