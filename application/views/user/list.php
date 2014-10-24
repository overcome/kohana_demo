<?php include Kohana::find_file('views', 'header'); ?>

<div id="wrapper">

    <?php include Kohana::find_file('views', 'nav'); ?>

<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">List</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">

    <p class="">
    <a href="./" class="btn btn-outline btn-default">Add New</a>

        <button type="button" class="btn btn-success cs_export">Export</button>

        <button type="button" class="btn btn-primary cs_assign" data-uid="3">Assign to Kriss</button>
        <button type="button" class="btn btn-primary cs_assign" data-uid="4">Assign to Nick</button>

        <button type="button" class="btn btn-danger cs_delete_top">Delete</button>

    </p>

    <div class="alert alert-danger cs_top_error" style="display: none;">
        There is no record selected.
    </div>



<div class="panel panel-default">
<div class="panel-heading">
    DataTables Advanced Tables
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">



<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
    <th><input type="checkbox" class="select_all" value="default" /></th>
    <th>Assigned To</th>
    <th>Account</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Position</th>
    <th>Interested</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Comments</th>
    <th>Last Update</th>
    <th>Actions</th>
</tr>
</thead>
<tbody>
<?php

$i=1;
foreach ($record_list as $rd_info)
{
?>
<tr class="odd gradeX">
    <td><input type="checkbox" name="rd_id" class="rd_id" value="<?php echo $rd_info['id']; ?>" /></td>
    <td class="cs_account_text_<?php echo $rd_info['id']; ?>"><?php echo $rd_info['username']; ?></td>
    <td><?php echo $rd_info['account']; ?></td>
    <td><?php echo $rd_info['firstname']; ?></td>
    <td><?php echo $rd_info['lastname']; ?></td>
    <td class="center"><?php echo $rd_info['position']; ?></td>
    <td class="center"><?php echo $rd_info['interested']; ?></td>
    <td class="center"><?php echo $rd_info['email']; ?></td>
    <td class="center"><?php echo $rd_info['phone']; ?></td>
    <td class="center"><?php echo $rd_info['address']; ?></td>
    <td class="center">

        <div class="panel-body">

            <!--<div class="<?php echo 'comments_text_'.$rd_info['id']; ?>">&nbsp;</div>-->


            <!-- Button trigger modal -->
            <button class="btn btn-primary btn-xs comments_btn" data-toggle="modal" data-target="#myModal_<?php echo $rd_info['id']; ?>" data-rid="<?php echo $rd_info['id']; ?>">
                Comments
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal_<?php echo $rd_info['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Comments</h4>
                        </div>
                        <div class="modal-body">

                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Comments List
                                        </div>
                                        <!-- .panel-heading -->
                                        <div class="panel-body">
                                            <div class="panel-group" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group Item #1</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- .panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->

                            <dt><?php echo Form::label('comments_'.$rd_info['id'], 'Add Comments') ?></dt>
                            <dd><?php echo Form::textarea('comments_'.$rd_info['id'], $post['comments_'.$rd_info['id']], array('id'=>'comments_'.$rd_info['id'])); ?></dd>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary save_changes" data-rid="<?php echo $rd_info['id']; ?>">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
        </div>
        </div>

    </td>
    <td class="center">last update</td>
    <td class="center">
        <a href="edit/<?php echo $rd_info['id']; ?>">Edit</a> |
        <a href="#">Delete</a>
    </td>
</tr>
<?php

    $i++;
}
?>
</tbody>
</table>
</div>

</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>


</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="<?php echo url::base(); ?>src/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo url::base(); ?>src/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo url::base(); ?>src/js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo url::base(); ?>src/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo url::base(); ?>src/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo url::base(); ?>src/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();



        // Get comments info of current record, assign these info to popup dialog.
        jQuery('.comments_btn').click(function (){
            var curr_rd_id = jQuery(this).attr("data-rid");
            var curr_rd_comment_text = 'myModal_' + curr_rd_id;

            jQuery.ajax({
                type: "POST",
                url: "../ajax/get_comments",
                data: {rd_id:curr_rd_id, show_comments:'yes'},
                dataType: "html",
                success: function(data){
                    if (data != 'empty')
                    {
                        jQuery("#" + curr_rd_comment_text + " #accordion").empty();
                        jQuery("#" + curr_rd_comment_text + " #accordion").html(data);
                    }
                }
            });
        });

        // Comments add action
        jQuery('.save_changes').click(function () {
            var curr_rd_id = jQuery(this).attr("data-rid");
            var curr_rd_comment_name = 'comments_' + curr_rd_id;
            var curr_rd_comment_text = 'myModal_' + curr_rd_id;
            var curr_comment = jQuery("#" + curr_rd_comment_name).val();

            jQuery.ajax({
                type: "POST",
                url: "../ajax/save_comments",
                data: {rd_id:curr_rd_id, content:curr_comment},
                dataType: "html",
                success: function(data){
                    if (data != 'empty')
                    {
                        jQuery("#" + curr_rd_comment_text + " #accordion").empty();
                        jQuery("#" + curr_rd_comment_text + " #accordion").html(data);
                    }
                }
            });

        });


        $(".select_all").click(function() {
            $("input[name='rd_id']").prop("checked", this.checked);
        });

        $("input[name='rd_id']").click(function() {
            var $subs = $("input[name='rd_id']");
            $(".select_all").prop("checked" , $subs.length == $subs.filter(":checked").length ? true :false);
        });

        // Action
        jQuery(".cs_export").click(function (){
            var all_checked_var = [];

            jQuery("#dataTables-example :checked").each(function () {
                all_checked_var.push(jQuery(this).val());
            });

            console.log(all_checked_var);
            console.log(all_checked_var.length);

            if (all_checked_var.length > 0)
            {
                jQuery('.cs_top_error').css('display', 'none');
            }else{
                console.log('test, not selected.');
                // No value checked
                jQuery('.cs_top_error').css('display', 'block');

            }

        });

        // Assign action
        jQuery(".cs_assign").click(function (){
            var selected_id_arr = [];
            var uid = jQuery(this).attr('data-uid');
            //var selected_rd_id = jQuery('.rd_id :selected').val();


            jQuery('.rd_id:checked').each(function (){
                var curr_val = jQuery(this).val();

                selected_id_arr.push(curr_val);
            });

            console.log(selected_id_arr);


            if (selected_id_arr.length > 0 ) {
                jQuery('.cs_top_error').css('display', 'none');

                jQuery.ajax({
                    type: "POST",
                    url: "../ajax/assignto",
                    data: {user_id: uid, content: selected_id_arr},
                    dataType: "html",
                    success: function (data) {

                        //alert(data);
                        //jQuery('#resText').empty();   //清空resText里面的所有内容
                        //var html = 'html';
                        //jQuery("." + curr_rd_comment_text).empty();
                        //jQuery("." + curr_rd_comment_text).html(data);
                        //jQuery('#resText').html(html);


                        jQuery.each(selected_id_arr, function (key, val) {
                            console.log('cs_account_text_' + val);
                            var account_text = 'cs_account_text_' + val;
                            jQuery("." + account_text).empty();
                            jQuery("." + account_text).html(data);
                        });
                    }
                });
            }else{
                // No value checked
                jQuery('.cs_top_error').css('display', 'block');
            }

            // assign action function end
        });

        // Delete action
        jQuery('.cs_delete_top').click(function(){
            var all_checked_var = [];
            var uid = 'client';

            jQuery("#dataTables-example :checked").each(function () {
                all_checked_var.push(jQuery(this).val());
            });

            console.log(all_checked_var);
            console.log(all_checked_var.length);

            if (all_checked_var.length > 0)
            {
                jQuery('.cs_top_error').css('display', 'none');

                jQuery.ajax({
                    type: "POST",
                    url: "../ajax/delete",
                    data: {user_id: uid, content: all_checked_var},
                    dataType: "html",
                    success: function (data) {

                        jQuery.each(all_checked_var, function (key, val) {
                            console.log('cs_account_text_' + val);
                            var account_text = 'cs_account_text_' + val;
                            jQuery("." + account_text).empty();
                            jQuery("." + account_text).html(data);
                        });
                    }
                });

            }else{
                console.log('test, not selected.');
                // No value checked
                jQuery('.cs_top_error').css('display', 'block');
            }

            // delete action function end
        });


    });
</script>

<?php include Kohana::find_file('views', 'footer'); ?>
