<?php
    if(isset($_GET['id'])){
        $sql = $fn->connection()->prepare("SELECT * FROM users INNER JOIN user_info ON users.user_id = user_info.user_id WHERE users.user_id = ?");
        $sql->execute([$_GET['id']]);
        $col = $sql->fetch(PDO::FETCH_ASSOC);
        echo '<div class="container-fluid">
        <h3 class="text-dark mb-5">Profile</h3>
        <div class="row mb-3">
            <div class="col-lg-6">
                  <div class="card mb-3">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">User Settings</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" placeholder="'.$col["username"].'" name="username" value="'.$col["username"].'" required autocomplete="off"></div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                      <label for="oldpass"><strong>Password</strong></label>
                                      <input class="form-control" type="password" placeholder="Enter old password..." name="oldpass" required></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                      <label for="pass"><strong>Password</strong></label>
                                      <input class="form-control" type="password" placeholder="Enter password..." name="pass" required></div>
                                </div>
                                <div class="col">
                                    <div class="repass"><label for="last_name"><strong>Confirm Password</strong></label><input class="form-control" type="password" placeholder="Confirm password..." name="cpass" required></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit" name="UpdatePass">Save Settings</button>
                            </div>
                            '.$fn->update_account().'
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">User Info</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="">
                                    <div class="form-row">
                                      <div class="col">
                                        <div class="form-group">
                                          <label for="fname"><strong>First Name:</strong></label>
                                          <input class="form-control" type="text" placeholder="'.$col['fname'].'" name="fname" value="'.$col['fname'].'" autocomplete="off" required>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-group">
                                          <label for="mname"><strong>Middle Name:</strong></label>
                                          <input class="form-control" type="text" placeholder="'.$col['mname'].'" name="mname" value="'.$col['mname'].'" autocomplete="off" required>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="form-group">
                                          <label for="lname"><strong>Last Name:</strong></label>
                                          <input class="form-control" type="text" placeholder="'.$col['lname'].'" name="lname"  value="'.$col['lname'].'"autocomplete="off" required>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                              <label for="course"><strong>Course:</strong></label>
                                              <select class="form-control" name="course">
                                                <option disabled selected>Select Course</option>';?>
                                                <option value ="BSCS" <?php if($col["course"]=="BSCS") echo 'selected = "selected"'; ?>>BSCS</option>
                                                <option value ="BSIT" <?php if($col["course"]=="BSIT") echo 'selected = "selected"'; ?>>BSIT</option>
                                              <?php echo'</select>
                                            </div>
                                        </div>
                                        <div class="col">
                                          <span class="ml-4"><strong>Gender:</strong></span>
                                              <br>
                                            <div class="form-inline ml-3 mt-2">
                                              <label class="mx-2 form-check-label" for="male"> Male </label>
                                              '; ?>

                                              <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php if($col["gender"]=="Male") echo 'checked'; ?>>

                                              <label class="mx-2 form-check-label" for="female"> Female </label>
                                              <input class="form-group-input" type="radio" name="gender" id="female" value="Female" <?php if($col["gender"]=="Female") echo 'checked'; ?>>
                                              <?php echo'
                                             </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <button class="btn btn-primary btn-sm" type="submit" name="UpdateUserInfo">Save&nbsp;Info</button>
                                    </div>
                                    '.$fn->update_account().'
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    }
    else
    {

?>
    <div class="container-fluid">
        <h3 class="text-dark mb-5">Profile</h3>
        <div class="row mb-3">
            <div class="col-lg-6 justify-content-center">
                  <div class="card mb-3">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">User Settings</p>
                    </div>
                    <div class="card-body">
                        <form class="" method="POST" action="">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" placeholder="Enter username..." name="username" required autocomplete="off"></div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                      <label for="oldpass"><strong>Password</strong></label>
                                      <input class="form-control" type="password" placeholder="Enter old password..." name="oldpass" required></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                      <label for="pass"><strong>Password</strong></label>
                                      <input class="form-control" type="password" placeholder="Enter password..." name="pass" required></div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label for="last_name"><strong>Confirm Password</strong></label><input class="form-control" type="password" placeholder="Confirm password..." name="cpass" required></div>
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="UpdatePass">Save Settings</button></div>
                            <?php $fn->update_account(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    }
?>