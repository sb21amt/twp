<?php namespace Shapla\Definitions;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Definitions\Components\Definitionsform' => 'definitionsform'
    	];
    }

    public function registerSettings()
    {
    }
}
