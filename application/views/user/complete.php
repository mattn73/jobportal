<div class="row">
    <div class="col-md-8 register-form  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Complete Profile</h2>
                <?php echo form_open('user/seeker_complete', 'validate-form" id="signup_form"'); ?>
                <table class="table table-user-information ">
                    <tbody>
                    <tr>
                        <td>Contact Number:</td>
                        <td><input type="number" value="" class="form-control"
                                   name="mobile" placeholder="Enter Contact Number" required></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><input type="date" value="" class="form-control"
                                   name="dob" placeholder="Enter Date Of Birth" required></td>
                    </tr>


                    <tr>
                        <td>Highest Qualification Achieved:</td>
                        <td>
                            <input type="text" value=""
                                   class="form-control" name="hqa"
                                   placeholder="Enter Highest Qualification Achieved" required></td>
                    </tr>





                    </tbody>
                </table>

                <?php echo validation_errors(); ?>
                <button type="submit" class="btn btn-lg btn-primary ml-2">Save</button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</div>


<script>


</script>
