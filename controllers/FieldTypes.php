<?php namespace Acte\ContentManager\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class FieldTypes extends Controller
{
    public $implement = [
      'Backend\Behaviors\ListController',
      'Backend\Behaviors\FormController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'acte.contentmanager.manage_fields',
        'acte.contentmanager.manage_fieldtypes'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Acte.ContentManager', 'contentmanager', 'fieldtypes');
    }
}
