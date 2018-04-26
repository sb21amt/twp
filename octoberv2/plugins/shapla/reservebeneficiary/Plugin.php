<?php namespace Shapla\Reservebeneficiary;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Reservebeneficiary\Components\Reservebeneficiaryform' => 'reservebeneficiaryform'
    	];
    }

    public function registerSettings()
    {
    }
}
