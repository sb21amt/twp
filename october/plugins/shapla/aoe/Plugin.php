<?php namespace Shapla\Aoe;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Aoe\Components\Aoeform' => 'aoeform'
    	];
    }

    public function registerSettings()
    {
    }
}
