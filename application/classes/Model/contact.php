<?php

class Model_Contact extends Model {
//class Model_Contact extends ORM {

    public function values($data)
    {
        print_r($data);
    }

    public function save($data)
    {
        print_r($data);
    }

    // Validate rules
    public function rules()
    {
        return array(
            'cid' => array(
                array('not_empty')
            ),
            'title' => array(
                array('not_empty')
            ),
            'content' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 40))
            ),
        );
    }

}