<?php
/**
 * @copyright   Copyright (C) 2010-2025 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sample-portal-conditional-theme/0.1.0', array(
        // Identification
        'label' => 'Conditional portal theme (sample-portal-conditional-theme)',
        'category' => 'Portal',
        // Setup
        'dependencies' => array(
            'itop-portal-base/1.0.0',
        ),
        'mandatory' => false,
        'visible' => true,

        // Components
        'datamodel' => array(
			'portal-autoload.php',
			'src/Router/SampleThemeRouter.php',
			'vendor/autoload.php',
        ),
        'webservice' => array(
        ),
        'dictionary' => array(
        ),
        'data.struct' => array(
        ),
        'data.sample' => array(
        ),
        // Documentation
        'doc.manual_setup' => '',
        'doc.more_information' => '',
        // Default settings
        'settings' => array(
        ),
	)
);