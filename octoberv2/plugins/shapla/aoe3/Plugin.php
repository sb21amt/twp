<?php namespace Shapla\Aoe3;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Aoe3\Components\Aoeform3' => 'aoeform3'
    	];
    }

    public function registerSettings()
    {
    }
}
