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
                        <td><?=$seeker->firstname?></td>
                    </tr>
                    <tr>
                        <td>lastname:</td>
                        <td><?=$seeker->lastname?></td>
                    </tr>

                    <tr>
                        <td>email:</td>
                        <td><?=$seeker->email?></td>
                    </tr>
                    <tr>
                        <td>Postal Address:</td>
                        <td id="profile-address"><?=$seeker->postal_address?></td>
                    </tr>

                    <tr>
                        <td>contact Number:</td>
                        <td>
                            <?=$seeker->mobile?>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>
                            <?=$seeker->dob?>
                        </td>
                    </tr>
                    <tr>

                        <td>Highest Qualification Achieved</td>
                        <td>
                            <?=$seeker->hqa?>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="#" onClick={props.handleSubmitProfile} class="btn btn-primary ml-2">Edit Profile</a>
            </div>
        </div>
    </div>
    <div class="col-md-4  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Skill</h3>
                <table class="table table-user-information ">
                    <tbody>
                    <tr>
                        <td>web developper</td>

                    </tr>
                    <tr>
                        <td>Analysis</td>

                    </tr>
                    <tr>
                        <td>Reaper</td>

                    </tr>
                    </tbody>
                </table>
                <a href="#" onClick={props.handleSubmitPass} class="btn btn-primary ml-2">Add Skill</a>
            </div>
        </div>
    </div>
</div>