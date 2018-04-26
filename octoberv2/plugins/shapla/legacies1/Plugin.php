<?php namespace Shapla\Legacies1;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Legacies1\Components\Legacies1' => 'legacies1'
    	];
    }

    public function registerSettings()
    {
    }
}
