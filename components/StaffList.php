<?php

namespace Nambit\Staff\Components;

use Nambit\Staff\Models\Entry;

class StaffList extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'          => 'Staff List',
            'description'   => 'Displays a list of the staff.'
        ];
    }
    
    public function defineProperties()
    {
        return [
            'staffList' => [
                'title'         => 'Staff List',
                'description'   => 'The list which should be displayed.',
                'type'          => 'dropdown',
                'required'      => true,
            ],
            'displayJobTitle' => [
                'title'         => 'Display Job Title',
                'description'   => 'Disable to hide the Job-title',
                'type'          => 'checkbox',
                'default'       => true
            ],
            'entryCssClass' => [
                'title'         => 'Person CSS-class',
                'description'   => 'Customize CSS-classes on each entry. Especially useful for setting responsive-grid-classes',
                'default'       => 'col-md-3 col-sm-6',
            ],
            'imageWidth'   => [
                'title'         => 'Width',
                'description'   => 'Width of the resized image',
                'default'       => '200',
                'group'         => 'Image',
            ],
            'imageHeight'   => [
                'title'         => 'Height',
                'description'   => 'Height of the resized image',
                'default'       => '200',
                'group'         => 'Image',
            ],
            'imageMode'   => [
                'title'         => 'Mode',
                'description'   => 'Resize Mode',
                'default'       => 'auto',
                'type'          => 'dropdown',
                'options'       => [
                    'auto'          => 'Auto',
                    'exact'         => 'Exact',
                    'portrait'      => 'Portrait',
                    'landscape'     => 'Landscape',
                    'crop'          => 'Crop',
                ],
                'group'         => 'Image',
            ],
            'imageQuality'   => [
                'title'             => 'Quality',
                'description'       => 'Quality of the resized image',
                'default'           => '80',
                'group'             =>'Image',
                'validationPattern' => '^[1-9][0-9]?$|^100$',
                'validationMessage' => 'Image Quality has to be a number ranging from 1 to 100'
            ],
        ];
    }
    
    public function getStaffListOptions()
    {
        return Entry::orderBy('name')->lists('name', 'id');
    }

    // This array becomes available on the page as {{ component.entry }}
    public function entry()
    {
        return Entry::find($this->property('staffList'));
    }
    

}
