<?php namespace Ardani\Stikes\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Slider Back-end Controller
 */
class Slider extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];
    public $requiredPermissions = ['ardani.stikes.slider'];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ardani.Stikes', 'stikes', 'slider');
    }
}