<?php namespace Nambit\Staff\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Entries extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'nambit.staff.manage' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Nambit.Staff', 'nambit-staff');
    }
}