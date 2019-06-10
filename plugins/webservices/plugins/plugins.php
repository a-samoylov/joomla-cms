<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Webservices.Content
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Router\ApiRouter;
use Joomla\Router\Route;

/**
 * Web Services adapter for com_plugins.
 *
 * @since  4.0.0
 */
class PlgWebservicesPlugins extends CMSPlugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  4.0.0
	 */
	protected $autoloadLanguage = true;

	/**
	 * Registers com_plugins's API's routes in the application
	 *
	 * @param   ApiRouter  &$router  The API Routing object
	 *
	 * @return  void
	 *
	 * @since   4.0.0
	 */
	public function onBeforeApiRoute(&$router)
	{
		$getDefaults = array('public' => false, 'component' => 'com_plugins');

		$router->addRoutes(array(
			new Route(['GET'], 'v1/plugins', 'plugins'. '.displayList', [], $getDefaults),
			new Route(['GET'], 'v1/plugins' . '/:id', 'plugins' . '.displayItem', ['id' => '(\d+)'], $getDefaults),
			new Route(['PUT'], 'v1/plugins' . '/:id', 'plugins' . '.edit', ['id' => '(\d+)'], $getDefaults)
		));
	}
}
