<?php namespace Shapla\Beneficiary;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
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
