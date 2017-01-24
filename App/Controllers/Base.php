<?php

class App_Controllers_Base extends MvcCore_Controller
{
	public function Init () {
		parent::Init();
		// do any initialization here:
			
	}
	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->_preDispatchSetUpBundles();
			// do any prerender initialization here:
			
		}
	}
	private function _preDispatchSetUpBundles () {
		MvcCoreExt_ViewHelpers_Assets::SetGlobalOptions(
			(array) MvcCore_Config::GetSystem()->assets
		);
		$static = self::$staticPath;
		$this->view->Css('fixedHead')
			->AppendRendered($static . '/css/fonts.css')
			->AppendRendered($static . '/css/all.css');
		$this->view->Js('fixedHead')
			->Append($static . '/js/libs/class.min.js')
			->Append($static . '/js/libs/ajax.min.js')
			->Append($static . '/js/libs/Module.js');
		$this->view->Js('varFoot')
			->Append($static . '/js/Front.js');
	}
}