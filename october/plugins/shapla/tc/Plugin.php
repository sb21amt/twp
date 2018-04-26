<?php namespace Shapla\TC;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Tc\Components\Tcform' => 'tcform'
    	];
    }

    public function registerSettings()
    {
    }
}
