<?php namespace Shapla\Legacies2;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	// This function registers the component, it returns the pathlink to reach the default.htm file.
    public function registerComponents()
    {
    	return [
    		'Shapla\Legacies2\Components\Legacies2' => 'legacies2'
    	];
    }

    public function registerSettings()
    {
    }
}
