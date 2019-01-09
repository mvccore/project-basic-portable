<?php

namespace App;

class Bootstrap
{
	public static function Init ()
	{
		// Patch core to use extended debug class:
		if (class_exists('\MvcCore\Ext\Debugs\Tracy')) {
			\MvcCore\Ext\Debugs\Tracy::$Editor = 'NotepadPP';
			\MvcCore\Application::GetInstance()->SetDebugClass('\MvcCore\Ext\Debugs\Tracy');
		}
		
		/**
		 * Uncomment this line before generate any assets into temporary directory, before application 
		 * packing/building, only if you want to pack application without JS/CSS/fonts/images inside
		 * result PHP package and you want to have all those files placed on hard drive.
		 * You can use this variant in modes `PHP_PRESERVE_PACKAGE`, `PHP_PRESERVE_HDD` and `PHP_STRICT_HDD`.
		 */
		//\MvcCore\Ext\Views\Helpers\Assets::SetAssetUrlCompletion(FALSE);

		// Set up application routes with custom names:
		\MvcCore\Router::GetInstance([
			'home'			=> [
				'match'			=> "#^/$#",
				'reverse'		=> '/',
				'controller'	=> 'Index',
				'action'		=> 'Home',
			],
			/*'my_name'	=> [
				'pattern'		=> "/my-path[/<my_param>]',
				'controller'	=> 'MyController',
				'action'		=> 'Index',
				'my_param'		=> NULL,
			],*/
		]);
	}
}
