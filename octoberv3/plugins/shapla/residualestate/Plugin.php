<?php namespace Shapla\Residualestate;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	// This function registers the component, it returns the pathlink to reach the default.htm file.
    public function registerComponents()
    {
    	return [
    		'Shapla\Residualestate\Components\Residual_estate_form' => 'residual_estate_form'
    	];
    }

    public function registerSettings()
    {
    }
}
