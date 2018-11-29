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
                        <td><?=$skill->name?></td>

                    </tr>

                    <?php endforeach; ?>


                    </tbody>
                </table>
                <a href="#" onClick="addSkill()" class="btn btn-primary ml-2">Add Skill</a>
            </div>
        </div>
    </div>
</div>

<script>

    function addSkill() {

        var dummy = '<tr><td><form class="skill-form form-inline" action="/action_page.php"><div class="form-group"><input type="text" name="name" class="form-control add-skill" id="add-skill"></div><button type="submit" class="btn btn-default">Add</button></form></td></tr>';
        $('#profile-skill').append(dummy);
    }


	 $(function () {

        $('skill-form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'user/add_skill',
            data: this.serialize(),
            success: function () {
              alert('skillAdd');
			  
            }
          });

        });

      });
</script>
