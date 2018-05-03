<?php namespace Shapla\Aoe;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	// This function registers the component, it returns the pathlink to reach the default.htm file.
    public function registerComponents()
    {
    	return [
    		'Shapla\Aoe\Components\Aoeform' => 'aoeform'
    	];
    }

    public function registerSettings()
    {
    }
}
