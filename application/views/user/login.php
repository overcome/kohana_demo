<?php include Kohana::find_file('views', 'header'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Client info database - Sign In</h3>
                </div>
                <div class="panel-body">

                        <?php echo Form::open('admin/login', array('method'=>'post', 'role'=>'form')) ?>
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
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>

                            <?php echo Form::submit(NULL, 'Login', array('class'=>'btn btn-lg btn-success btn-block')) ?>

                        </fieldset>
                    <?php echo Form::close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery Version 1.11.0 -->
<script src="<?php echo url::base(); ?>src/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo url::base(); ?>src/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo url::base(); ?>src/js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo url::base(); ?>src/js/sb-admin-2.js"></script>

<?php include Kohana::find_file('views', 'footer'); ?>