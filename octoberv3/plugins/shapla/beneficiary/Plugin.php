<?php namespace Shapla\Beneficiary;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	// This function registers the component, it returns the pathlink to reach the default.htm file.
    public function registerComponents()
    {
    	return [
    		'Shapla\Beneficiary\Components\Beneficiaryform' => 'beneficiaryform'
    	];
    }

    public function registerSettings()
    {
    }
}
