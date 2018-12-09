<div class="row">
    <div class="col-md-8 register-form  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Login</h2>
                <?php echo form_open('login/seeker', 'validate-form" id="login_form"'); ?>
                <table class="table table-user-information ">
                    <tbody>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" value="" class="form-control"
                                   name="email" placeholder="Enter Email" required><br/>
                            <p><?php echo form_error('email', '<div class="alert alert-danger">', '</div>'); ?></p></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" value="" class="form-control"
                                   name="password" placeholder="Enter Password" required><br/>
                            <p><?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?></p></td>
                    </tr>


                    </tbody>
                </table>

                <div class="text-center p-t-30">
                    <!-- Server side validation errors -->
                    <?php if (isset($error)): ?>
                        <div class="alert <?= $error->class; ?>" role="alert">
                            <?= $error->msg; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-lg btn-primary ml-2">Login</button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</div>


<script>


</script>
