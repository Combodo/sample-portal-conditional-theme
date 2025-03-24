<?php
/**
 * @copyright   Copyright (C) 2010-2025 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

namespace Combodo\iTop\Portal\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserRights;

class SampleThemeController extends AbstractController {
	
	public function Display(Request $oRequest) {
		
		// Make a CSS response
		$oResponse = new Response();
		$oResponse->headers->set('Content-Type', 'text/css');
		
		// Condition to check if the user has the 'Portal power user' profile
		// Adapt this condition to your needs
		if (UserRights::HasProfile('Portal power user') === true) {
			$this->Render('sample-portal-conditional-theme/view/SampleTheme.css.twig', [], $oResponse);
		} else {
			$oResponse->setContent('/* No CSS for you */');
		}
		
		return $oResponse;
	}
}