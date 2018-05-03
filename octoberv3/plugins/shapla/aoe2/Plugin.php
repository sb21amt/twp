<?php namespace Shapla\Aoe2;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	// This function registers the component, it returns the pathlink to reach the default.htm file.
    public function registerComponents()
    {
    	return [
    		'Shapla\Aoe2\Components\Aoeform2' => 'aoeform2'
    	];
    }

    public function registerSettings()
    {
    }
}
