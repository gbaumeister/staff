<?php namespace Nambit\Staff;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['ToughDeveloper.ImageResizer'];
    
    
    public function registerComponents()
    {
        return [
             'Nambit\Staff\Components\StaffList' => 'nambitStaffList'
        ];
    }

    public function registerSettings()
    {
    }
    
    
    public function registerPageSnippets()
    {
        return $this->registerComponents();
    }
}
