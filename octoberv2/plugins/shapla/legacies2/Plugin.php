<?php namespace Shapla\Legacies2;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
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
