<?php

namespace App;

class Bootstrap {
	public static function Init () {
		// patch core to use extended debug class
		if (class_exists('\MvcCore\Ext\Debug\Tracy')) {
			\MvcCore\Ext\Debug\Tracy::$Editor = 'NotepadPP';
			\MvcCore::GetInstance()->SetDebugClass(\MvcCore\Ext\Debug\Tracy::class);
		}	
		
		// use this line only if you want to pack application without JS/CSS/fonts/images
		// inside package and you want to have all those files placed on hard drive manualy
		// you can use this variant in modes PHP_PRESERVE_PACKAGE, PHP_PRESERVE_HDD and PHP_STRICT_HDD
		//\MvcCore\Ext\ViewHelpers\Assets::SetAssetUrlCompletion(FALSE);

		// add another view helper namespace
		\MvcCore\View::AddHelpersClassBases('\MvcCore\Ext\ViewHelpers');
		
		// set up application routes with custom names:
		\MvcCore\Router::GetInstance(array(
			'home'		=> array(
				'pattern'		=> "#^/$#",
				'reverse'		=> '/',
				'controller'	=> 'Index',
				'action'		=> 'Home',
			),
		));
	}
}