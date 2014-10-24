<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Template
{

    public $template = 'form/contact';

    public function action_index()
    {
        if ($_POST)
        {

            $contact = ORM::factory('contact')->values($_POST);

            $val = Validation::factory($_POST, '_external', array());

            try {
                $contact->save($val);
            }
            catch (ORM_Validation_Exception $e)
            {
                $this->template->errors = $e->errors('models');
            }
        }
    }
}

// End Form
