<?php namespace Shapla\Reservebeneficiary;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	// This function registers the component, it returns the pathlink to reach the default.htm file.
    	return [
    		'Shapla\Reservebeneficiary\Components\Reservebeneficiaryform' => 'reservebeneficiaryform'
    	];
    }

    public function registerSettings()
    {
    }
}
