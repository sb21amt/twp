<?php namespace Shapla\Homepage;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Homepage\Components\Homepageform' => 'homepageform'
    	];
    }

    public function registerSettings()
    {
    }
}
