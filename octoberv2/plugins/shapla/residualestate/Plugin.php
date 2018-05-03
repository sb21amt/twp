<?php namespace Shapla\Residualestate;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
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
