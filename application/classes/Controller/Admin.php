<?php
class Controller_Admin extends Controller
{
    public function action_logout()
    {
        $session = Session::instance();
        $session->delete('username');
        $session->delete('user_id');

        $this->redirect('admin/login', 303);
    }

    public function action_login()
    {
        $user = Model::factory('user');


        if (count($this->request->post())>0)
        {
            $validation = Validation::factory($this->request->post())
                ->rule('username', 'not_empty')
                ->rule('username', 'regex', array(':value', '/^[a-z_.]++$/iD'))
                //->rule('firstname', array($user, 'unique_username'))

                ->rule('password', 'not_empty');
            //->rule('password', 'min_length', array(':value', 6))

            if ($validation->check())
            {
                // Data has been validated, register the user
                $var_post_data['username'] = $this->request->post('username');
                $var_post_data['password'] = $this->request->post('password');

                $username_password_num = $user->login_check($var_post_data);

                if ($username_password_num > 0)
                {
                    // Login
                    // Get user info by username and password
                    $user_info_arr = $user->get_user_info_by_username_password($var_post_data);

                    // Get the session instance
                    $session = Session::instance();

                    // Set session var
                    $session->set('username', $user_info_arr[0]['username']);
                    $session->set('user_id', $user_info_arr[0]['user_id']);


                    $this->redirect('user/list', 303);
                }else{
                    // Not allow login
                    $errors['not_member'] = 'Error information';

                }
            }

            // Validation failed, collect the errors
            $errors = ($errors['not_member'] != '')?$errors:$validation->errors('user');
        }else{}


        $posts = $this->request->post();

        $form_view = View::factory('user/login')
            ->bind('post', $posts)
            ->bind('errors', $errors);
        $this->response->body($form_view);
    }
}