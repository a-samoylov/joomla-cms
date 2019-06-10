<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Webservices.Config
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Router\ApiRouter;
use Joomla\Router\Route;

/**
 * Web Services adapter for com_config.
 *
 * @since  4.0.0
 */
class PlgWebservicesConfig extends CMSPlugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  4.0.0
	 */
	protected $autoloadLanguage = true;

	/**
	 * Registers com_config's API's routes in the application
	 *
	 * @param   ApiRouter  &$router  The API Routing object
	 *
	 * @return  void
	 *
	 * @since   4.0.0
	 */
	public function onBeforeApiRoute(&$router)
	{
		$getDefaults = array('public' => false, 'component' => 'com_config');

		$routes = array(
			new Route(['GET'], 'v1/config/application', 'application' . '.displayList', [], $getDefaults),
			new Route(['PUT'], 'v1/config/application', 'application' . '.edit', [], $getDefaults),
            new Route(['GET'], 'v1/config' . '/:component_name', 'component' . '.displayList', ['component_name' => '([A-Za-z_]+)'], $getDefaults),
            new Route(['PUT'], 'v1/config' . '/:component_name', 'component' . '.edit', ['component_name' => '([A-Za-z_]+)'], $getDefaults),
		);

		$router->addRoutes($routes);
	}
}
