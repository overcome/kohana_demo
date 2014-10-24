<?php include Kohana::find_file('views', 'header'); ?>

<div id="wrapper">

    <?php include Kohana::find_file('views', 'nav'); ?>

<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
    Data record form
</div>
<!-- /.panel-heading -->
<div class="panel-body">

    <?php
    $attributes = array(
        'class'=>'form-control'
    );

    $btn_attributes = array(
        'class'=>'btn btn-default'
    );

    $text_area_attributes = array(
        'class'=>'form-control',
        'rows'=>'3'
    );
    ?>

    <?php echo Form::open('user/edit/'.$record_id, array('method'=>'post')) ?>

    <?php if ($errors): ?>
    <div class="alert alert-danger">
        <p class="message">Some errors were encountered, please check the details you entered.</p>


        <ul class="errors">
            <?php foreach ($errors as $message): ?>
                <li><?php echo $message ?></li>
            <?php endforeach ?>

        </ul>
    </div>
    <?php endif ?>

        <dl>

            <dt><?php echo Form::label('account', 'Account *') ?></dt>
            <dd><?php echo Form::input('account', $post['account'], $attributes) ?></dd>

            <dt><?php echo Form::label('firstname', 'First name *') ?></dt>
            <dd><?php echo Form::input('firstname', $post['firstname'], $attributes) ?></dd>

            <dt><?php echo Form::label('lastname', 'Last name *') ?></dt>
            <dd><?php echo Form::input('lastname', $post['lastname'], $attributes) ?></dd>


            <dt><?php echo Form::label('position', 'Position') ?></dt>
            <dd><?php echo Form::input('position', $post['position'], $attributes) ?></dd>


            <dt><?php echo Form::label('interested', 'Interested?') ?></dt>
            <dd><?php echo Form::select('interested', array('yes' => 'Yes', 'no' => 'No', 'maybe' => 'Maybe'), $post['interested'], $attributes) ?></dd>
            <dd class="help">Please choose it.</dd>


            <dt><?php echo Form::label('email', 'Email') ?></dt>
            <dd><?php echo Form::input('email', $post['email'], $attributes) ?></dd>


            <dt><?php echo Form::label('phone', 'Phone') ?></dt>
            <dd><?php echo Form::input('phone', $post['phone'], $attributes) ?></dd>

            <dt><?php echo Form::label('address', 'Address') ?></dt>
            <dd><?php echo Form::textarea('address', $post['address'], $text_area_attributes); ?></dd>


        </dl>

        <?php echo Form::submit(NULL, 'Submit', $btn_attributes) ?>
        <?php echo Form::close() ?>

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
    });
</script>


<?php include Kohana::find_file('views', 'footer'); ?>