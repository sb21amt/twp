<?php namespace Shapla\Aoe2;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Aoe2\Components\Aoeform2' => 'aoeform2'
    	];
    }

    public function registerSettings()
    {
    }
}
