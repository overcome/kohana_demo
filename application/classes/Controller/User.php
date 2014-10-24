<?php
/**
 * Created by PhpStorm.
 * User: luye
 * Date: 14-9-28
 * Time: 下午4:41
 */

class Controller_User extends Controller {

    public function before()
    {
        $session = Session::instance();
        $user_id = $session->get('user_id');

        if (! $user_id)
        {
            $this->redirect('admin/login', 303);
        }
    }

    public function action_index()
    {
        //echo 'nidaye!';
        $this->response->body(View::factory('user/register'));
    }

    public function action_register()
    {
        $user = Model::factory('user');

        $validation = Validation::factory($this->request->post())
            ->rule('firstname', 'not_empty')
            //->rule('firstname', 'regex', array(':value', '/^[a-z_.]++$/iD'))
            //->rule('firstname', array($user, 'unique_username'))

            ->rule('lastname', 'not_empty')
            //->rule('password', 'min_length', array(':value', 6))
            //->rule('confirm',  'matches', array(':validation', ':field', 'password'))

            ->rule('account', 'not_empty')
            ->rule('interested', 'not_empty');
            //->rule('use_ssl', 'in_array', array(':value', array('yes', 'no')));

        if ($validation->check())
        {
            // Data has been validated, register the user
            $insert_db_data = $this->request->post();
            $insert_db_data['tstamp'] = time();
            $insert_db_data['submit_date'] = time();

            $user->register($insert_db_data);

            // Always redirect after a successful POST to prevent refresh warnings
            $this->redirect('user/list', 303);
        }

        // Validation failed, collect the errors
        $errors = $validation->errors('user');

        // Display the registration form
        //$this->response->body(View::factory('user/register'))
        //    ->bind('post', $this->request->post())
        //    ->bind('errors', $errors);

        $posts = $this->request->post();

        $form_view = View::factory('user/register')
            ->bind('post', $posts)
            ->bind('errors', $errors);
        $this->response->body($form_view);
    }

    public function action_list()
    {
        $user = Model::factory('user');

        $all_rd = $user->all_rd_array();

        //print_r($all_rd);

        $list_view = View::factory('user/list')
            ->bind('record_list', $all_rd);
        $this->response->body($list_view);
    }

    public function action_edit()
    {
        $user = Model::factory('user');
        $record_id = $this->request->param('id');

        $rd_info = $user->get_rd_info($record_id);

        // Deal post action --- start ---
        $posts = $this->request->post();

        if (count($posts)>0) {

            $validation = Validation::factory($this->request->post())
                ->rule('firstname', 'not_empty')
                //->rule('firstname', 'regex', array(':value', '/^[a-z_.]++$/iD'))
                //->rule('firstname', array($user, 'unique_username'))

                ->rule('lastname', 'not_empty')
                //->rule('password', 'min_length', array(':value', 6))
                //->rule('confirm',  'matches', array(':validation', ':field', 'password'))

                ->rule('account', 'not_empty')
                ->rule('interested', 'not_empty');
            //->rule('use_ssl', 'in_array', array(':value', array('yes', 'no')));

            if ($validation->check()) {
                // Data has been validated, register the user
                $insert_db_data = $this->request->post();
                $insert_db_data['tstamp'] = time();
                $insert_db_data['submit_date'] = time();

                $user->record_update($insert_db_data, $record_id);

                // Always redirect after a successful POST to prevent refresh warnings
                $this->redirect('user/edit/' . $record_id, 303);
            }

            // Validation failed, collect the errors
            $errors = $validation->errors('user');


            $posts = $this->request->post();

            // tpl var
            $field_info_arr = $posts;
        }else{
            $field_info_arr = $rd_info[0];
        }

        // Deal post action ---  end  ---




        $form_view = View::factory('user/edit')
            ->bind('post', $field_info_arr)
            ->bind('errors', $errors)
            ->bind('record_id', $record_id);
        $this->response->body($form_view);
    }


}