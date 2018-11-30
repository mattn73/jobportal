<div class="row">
    <div class="col-md-8 register-form  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Registration Job Seeker</h2>
                <?php echo form_open('signup/seeker', 'validate-form" id="signup_form"'); ?>
                    <table class="table table-user-information ">
                        <tbody>
                        <tr>
                            <td>Title:</td>
                            <td>
                                <select name="title" class="form-control">
                                    <option selected value="-1">Choose...</option>
                                    <option value="mr">Mr</option>
                                    <option value="mrs">Mrs</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Firstname:</td>
                            <td><input type="text" value="" class="form-control"
                                       name="firstname" placeholder="Enter Firstname" required></td>
                        </tr>
                        <tr>
                            <td>Lastname:</td>
                            <td><input type="text" value="" class="form-control"
                                       name="lastname" placeholder="Enter Lastname" required></td>
                        </tr>

                        <tr>
                            <td>Email:</td>
                            <td><input type="email" value="" class="form-control" name="email"
                                       placeholder="Enter Email" required></td>
                        </tr>
                        <tr>
                            <td>Postal Address:</td>
                            <td id="profile-address">
                                <input type="text" value=""
                                   class="form-control" name="postal_address"
                                   placeholder="Enter Postal Address" required></td>
                        </tr>

                        <tr>
                            <td>Password:</td>
                            <td><input type="password" value="" class="form-control"
                                       name="password" placeholder="Enter Password" required></td>
                        </tr>

                        <tr>
                            <td>Confirm Password:</td>
                            <td><input type="password" value="" class="form-control"
                                       name="conf_pass" placeholder="Confirrm Password" required></td>
                        </tr>


                        </tbody>
                    </table>

                    <?php echo validation_errors(); ?>
                    <button type="submit" class="btn btn-lg btn-primary ml-2">Register</button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</div>


<script>


</script>
