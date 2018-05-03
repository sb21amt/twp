<?php namespace Shapla\FuneralArrangments;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Funeralarrangments\Components\Funeralarrangmentsform' => 'funeralarrangmentsform'
    	];
    }

    public function registerSettings()
    {
    }
}
