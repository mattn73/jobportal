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
                                   name="email" placeholder="Enter Email" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" value="" class="form-control"
                                   name="password" placeholder="Enter Password" required></td>
                    </tr>


                    </tbody>
                </table>

                <?php echo validation_errors(); ?>
                <button type="submit" class="btn btn-lg btn-primary ml-2">Login</button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</div>


<script>


</script>