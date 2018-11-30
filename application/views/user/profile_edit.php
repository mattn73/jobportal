<div class="row">
    <div class="col-md-8  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?php echo ucfirst($seeker->firstname) ?></h2>
                <?php echo form_open('user/edit_save', 'validate-form" id="signup_form"'); ?>
                <table class="table table-user-information ">
                    <tbody>
                    <tr>
                        <td>Title:</td>
                        <td><?php echo ucfirst($seeker->title) ?></td>
                    </tr>
                    <tr>
                        <td>Firstname:</td>
                        <td><input type="text" value="<?= $seeker->firstname ?>" class="form-control"
                                   name="firstname" placeholder="Enter Firstname" required></td>
                    </tr>
                    <tr>
                        <td>Lastname:</td>
                        <td><input type="text" value="<?= $seeker->lastname ?>" class="form-control"
                                   name="lastname" placeholder="Enter Lastname" required></td>
                    </tr>


                    <tr>
                        <td>Postal Address:</td>
                        <td id="profile-address"><input type="text" value="<?= $seeker->postal_address ?>"
                                                        class="form-control" name="postal_address"
                                                        placeholder="Enter Postal Address" required></td>
                    </tr>

                    <tr>
                        <td>Contact Number:</td>
                        <td>

                            <input type="number" value="<?php echo((int)$seeker->mobile); ?>" class="form-control"
                                   name="mobile"
                                   placeholder="Enter Contact Number" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>
                            <input type="date" value="<?= $seeker->dob ?>" class="form-control" name="dob"
                                   placeholder="Enter Date of Birth" required>
                        </td>
                    </tr>
                    <tr>

                        <td>Highest Qualification Achieved</td>
                        <td>
                            <input type="text" value="<?= $seeker->hqa ?>" class="form-control" name="hqa"
                                   placeholder="Enter Highest Qualification Achieved" required>
                        </td>
                    </tr>

                    </tbody>
                </table>


                <?php echo validation_errors(); ?>
                <button type="submit" class="btn btn-lg btn-primary ml-2">Save</button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Skill</h3>
                <table id="profile-skill" class="table table-user-information ">
                    <tbody>

                    <?php foreach ($skills as $skill): ?>
                        <tr>
                            <td><?= $skill->name ?></td>
                            <td><a class="delete-icon" data-custom-value="<?= $skill->id ?>"><i
                                            class="fa fa-times-circle"></i></a></td>

                        </tr>

                    <?php endforeach; ?>

                    <tr>
                        <td>
                            <form id="skill-form" class="skill-form form-inline" style="display: none">
                                <div class="form-group"><input type="text" name="name" class="form-control add-skill"
                                                               id="add-skill"></div>
                                <button type="submit" class="btn btn-primary ml-2">Add</button>
                            </form>

                        </td>
                    </tr>

                    </tbody>
                </table>
                <a href="#" onClick="addSkill()" class="btn btn-primary ml-2">Add Skill</a>
            </div>
        </div>
    </div>
</div>


<script>


</script>
