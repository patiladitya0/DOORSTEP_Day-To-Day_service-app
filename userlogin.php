<?php
include_once "./include/header.php";
include_once "./msg/login.php";
?>

<div class="container" style="margin-top: 50px; width: 450px;background-color:#F0C987;">
    <div class="card" style=background-color:#F0C987;>
        <img src="./images/doorstep-nobag.png" style="height: 150px; width: 150px; margin-left: 130px ; background-color:#F0C987;" class="card-img-top"
            alt="...">
        <div class="card-body" style=background-color:#F0C987;>
            <div class="card-title" style=background-color:#F0C987;>
                <h3 class="text-center">Login As User</h3>
            </div>
        

            <form action="scripts/userlogin.php" method="post">
                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact1"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact1" type="text" class="form-control" placeholder="Enter Your Contact No."
                        minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input id="password1" name="password1" type="password" class="form-control"
                        placeholder="Enter Password" minlength="4" required>
                </div>

                <button style="margin-top: 30px; style=background-color:#DF691A;" class="btn btn-block btn-primary" type="submit" name="login1"
                    id="login1">Login</button>
                
                    <button style="margin-top: 30px; background-color:#DF691A;" class="btn btn-block btn-primary" onclick="window.location.href='userregister.php'">Sign Up</button>

            </form>

        </div>
    </div>
</div>


<!---END-->
