<div class="row">
    <?php //echo ucfirst($seeker->title);die;?>
    <div class="col-md-8  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Jose</h2>
                <table class="table table-user-information ">
                    <tbody>
                    <tr>
                        <td>Title:</td>
                        <td><?php echo ucfirst($seeker->title) ?></td>
                    </tr>
                    <tr>
                        <td>Firstname:</td>
                        <td><?= $seeker->firstname ?></td>
                    </tr>
                    <tr>
                        <td>lastname:</td>
                        <td><?= $seeker->lastname ?></td>
                    </tr>

                    <tr>
                        <td>email:</td>
                        <td><?= $seeker->email ?></td>
                    </tr>
                    <tr>
                        <td>Postal Address:</td>
                        <td id="profile-address"><?= $seeker->postal_address ?></td>
                    </tr>

                    <tr>
                        <td>contact Number:</td>
                        <td>
                            <?= $seeker->mobile ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>
                            <?= $seeker->dob ?>
                        </td>
                    </tr>
                    <tr>

                        <td>Highest Qualification Achieved</td>
                        <td>
                            <?= $seeker->hqa ?>
                        </td>
                    </tr>
                    <tr>

                        <td>CV Attached</td>
                        <td>
                            <?php if ($seeker->cv == 0): ?>
                                No
                            <?php elseif ($seeker->cv == 1): ?>
                                Yes
                            <?php endif; ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="/user/edit" class="btn btn-primary ml-2">Edit Profile</a>
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
    <div class="col-md-8  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">CV</h3>
                <table id="profile-skill" class="table table-user-information ">
                    <tbody>


                    <tr>
                        <td>
                            <?php if (isset($error)): ?>
                                <?php echo $error; ?>
                            <?php endif; ?>
                            <?php echo form_open_multipart('/user/do_upload' , array('class' => 'form-inline')); ?>
                            <div class="form-group"><input type="file" name="cv" size="40"/></div>
                            <button type="submit" class="btn btn-primary ml-2">Add</button>
                            </form>

                        </td>


                    </tr>
                    <?php if (isset($upload_data)): ?>
                        <tr>
                            <td>
                                File uploaded
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<script>



</script>
