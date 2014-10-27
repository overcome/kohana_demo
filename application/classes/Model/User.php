<?php
/**
 * Created by PhpStorm.
 * User: luye
 * Date: 14-9-28
 * Time: 下午4:41
 */

class Model_User extends Model {

    public function register($array)
    {
        // Create a new user record in the database
        $id = DB::insert('cs_contact')
            ->columns(array_keys($array))
            ->values($array)
            ->execute();

        // Save the new user id to a cookie
        //cookie::set('user', $id);


        return $id;
    }

    public function record_update($array, $record_id)
    {
        // Update record info by record id
        DB::update('cs_contact')
            ->set($array)
            ->where('id', '=', $record_id)
            ->execute();
    }

    public static function unique_username($username)
    {
        // Check if the username already exists in the database
        return ! DB::select(array(DB::expr('COUNT(firstname)'), 'total'))
            ->from('cs_contact')
            ->where('firstname', '=', $username)
            ->execute()
            ->get('total');
    }

    public function login_check($var_post_data)
    {
        // Check if the username already exists in the database
        return DB::select(array(DB::expr('COUNT(username)'), 'total'))
            ->from('cs_user')
            ->where('username', '=', $var_post_data['username'])
            ->and_where('password', '=', $var_post_data['password'])
            ->execute()
            ->get('total');
    }

    public function get_user_info_by_username_password($var_post_data)
    {
        $user_info = DB::select()
            ->from('cs_user')
            ->where('username', '=', $var_post_data['username'])
            ->and_where('password', '=', $var_post_data['password'])
            ->execute()
            ->as_array();

        return $user_info;
    }

    public function all_rd_array()
    {
        $all_record_list = DB::select()->from('cs_contact')->join('cs_user', 'LEFT')->on('cs_contact.assignto', '=', 'cs_user.user_id')->execute()->as_array();

        return $all_record_list;
    }

    public function ajax_save_comment($array)
    {
        // Create a new user record in the database
        $id = DB::insert('cs_comments')
            ->columns(array_keys($array))
            ->values($array)
            ->execute();

        // Save the new user id to a cookie
        //cookie::set('user', $id);


        return $id;
    }

    public function get_rd_comments($rd_id)
    {
        $all_record_list = DB::select()
            ->from('cs_comments')
            ->join('cs_user', 'LEFT')
            ->on('cs_comments.comments_user_id', '=', 'cs_user.user_id')
            ->where('cs_comments.comments_record_id', '=', $rd_id)
            ->order_by('cs_comments.comments_id', 'DESC')
            ->execute()
            ->as_array();

        return $all_record_list;
    }

    public function get_user_info($user_id)
    {
        $all_record_list = DB::select()->from('cs_user')->where('user_id', '=', $user_id)->execute()->as_array();

        return $all_record_list;
    }

    public function update_comment_assignto($contact_id, $user_id)
    {
        DB::update('cs_contact')->set(array('assignto' => $user_id))->where('id', '=', $contact_id)->execute();
    }

    public function delete_contact_rd($contact_id)
    {
        DB::delete('cs_contact')->where('id', '=', $contact_id)->execute();
        DB::delete('cs_comments')->where('comments_record_id', '=', $contact_id)->execute();
    }

    // Get record info by record id
    public function get_rd_info($contact_id)
    {
        $all_record_list = DB::select()->from('cs_contact')->join('cs_user', 'LEFT')->on('cs_contact.assignto', '=', 'cs_user.user_id')->where('cs_contact.id', '=', $contact_id)->execute()->as_array();

        return $all_record_list;
    }

}