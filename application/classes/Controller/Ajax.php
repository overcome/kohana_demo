<?php
/**
 * Created by PhpStorm.
 * User: luye
 * Date: 14-9-28
 * Time: 下午4:41
 */

class Controller_Ajax extends Controller {

    public function action_save_comments()
    {
        $session = Session::instance();
        $user_id = $session->get('user_id');

        $arr_post = $this->request->post();

        if (count($arr_post) > 0 && $arr_post['content'] != '') {

            $ajax_comment['tstamp'] = time();
            $ajax_comment['comments_user_id'] = $user_id;
            $ajax_comment['comments_record_id'] = $arr_post['rd_id'];
            $ajax_comment['comment'] = $arr_post['content'];
            $ajax_comment['comments_submit_date'] = time();

            $user = Model::factory('user');

            $user->ajax_save_comment($ajax_comment);

            // Get comment under current record id
            $comments_of_rd = $user->get_rd_comments($arr_post['rd_id']);
            $comments_list_html = '';

            $i=1;
            foreach ($comments_of_rd as $comment_info) {
                $comments_list_html .= '<div class="panel panel-default">';
                $comments_list_html .= '    <div class="panel-heading">';
                $comments_list_html .= '        <h4 class="panel-title">';
                $comments_list_html .= '            <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $i . '">'
                    . $comment_info['username'] . ' #' . $i . '</a>';
                $comments_list_html .= '    </h4>';
                $comments_list_html .= ' <small><i>submit on: ' . date('M d, Y [H:i:s]', $comment_info['comments_submit_date']) . '</i></small>';
                $comments_list_html .= '    </div>';


                if ($i==1)
                {
                    $comments_list_html .= '    <div id="collapse' . $i . '" class="panel-collapse collapse in">';
                }else{
                    $comments_list_html .= '    <div id="collapse' . $i . '" class="panel-collapse collapse">';
                }

                $comments_list_html .= '        <div class="panel-body">';
                $comments_list_html .= $comment_info['comment'];
                $comments_list_html .= '        </div>';
                $comments_list_html .= '    </div>';
                $comments_list_html .= '</div>';

                $i++;
            }

            echo $comments_list_html;
        }else{
            echo 'empty';
        }
    }

    public function action_get_comments()
    {
        $post_var = $this->request->post('show_comments');
        $arr_post = $this->request->post();

        if ($post_var=='yes')
        {
            $user = Model::factory('user');
            // Get comment under current record id
            $comments_of_rd = $user->get_rd_comments($arr_post['rd_id']);

            $comments_list_html = '';

            $i=1;
            foreach ($comments_of_rd as $comment_info)
            {
                $comments_list_html .= '<div class="panel panel-default">';
                $comments_list_html .= '    <div class="panel-heading">';
                $comments_list_html .= '        <h4 class="panel-title">';
                $comments_list_html .= '            <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $i . '">'
                                        . $comment_info['username'] . ' #' . $i . '</a>';
                $comments_list_html .= '    </h4>';
                $comments_list_html .= ' <small><i>submit on: ' . date('M d, Y [H:i:s]', $comment_info['comments_submit_date']) . '</i></small>';
                $comments_list_html .= '    </div>';

                if ($i==1)
                {
                    $comments_list_html .= '    <div id="collapse' . $i . '" class="panel-collapse collapse in">';
                }else{
                    $comments_list_html .= '    <div id="collapse' . $i . '" class="panel-collapse collapse">';
                }

                $comments_list_html .= '        <div class="panel-body">';
                $comments_list_html .= $comment_info['comment'];
                $comments_list_html .= '        </div>';
                $comments_list_html .= '    </div>';
                $comments_list_html .= '</div>';

                $i++;
            }

            echo $comments_list_html;

        }
    }

    public function action_assignto()
    {
        $user = Model::factory('user');
        $input_user_id = $this->request->post('user_id');
        $input_rd_id = $this->request->post('content');

        // update assignto in tl_cs_comments table
        foreach ($input_rd_id as $contact_id)
        {
            if ($contact_id == 'default')
            {
                continue;
            }

            $user->update_comment_assignto($contact_id, $input_user_id);
        }

        // Get user info
        $user_info = $user->get_user_info($input_user_id);

        echo $user_info[0]['username'];
    }

    // Delete multi-records
    public function action_delete()
    {
        $user = Model::factory('user');
        $input_user_id = $this->request->post('user_id');
        $input_rd_id = $this->request->post('content');

        if (count($input_rd_id) > 0 && $input_user_id !='')
        {
            foreach ($input_rd_id as $contact_id)
            {
                $user->delete_contact_rd($contact_id);
            }
        }

    }

    // Delete single record
    public function action_delete_single()
    {
        $user = Model::factory('user');
        $input_user_id = $this->request->post('user_id');
        $input_rd_id = $this->request->post('content');

        if ($input_rd_id !='' && $input_user_id !='')
        {
            $user->delete_contact_rd($input_rd_id);
        }

    }

    // Export xls file
    public function action_export_xls()
    {
        //echo 'daye';

        //print_r($_POST);exit;
        print_r($_GET);
        print_r($this->request->query());exit;

        if ($this->request->param('id'))
        {
            $filename = 'file.xls';

            $objPHPExcel = new PHPExcel();

            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Hello')
                ->setCellValue('B1', 'world!');

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            // We'll be outputting an excel file
            //header('Content-type: application/vnd.ms-excel');

            // It will be called file.xls
            //header('Content-Disposition: attachment; filename="file.xls"');



            $request = Response::factory(array('status' => 200));

            $request->response = $objWriter->save('php://output');
            $request->send_file(TRUE, $filename);
        }else{
            echo 'download';exit;
        }



    }


}