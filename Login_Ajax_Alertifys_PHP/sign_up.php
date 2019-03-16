<!DOCTYPE html>
<html>

<head>
	<!-- Import Scripts -->
	<?php require_once "scripts.php" ?>
	
    <title>Sign up</title>
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading text-center" style="background-color: #174970">Sign up
                    </div>
                    <div class="panel panel-body">
                        <form id="sign_up_form">
                            <label>First Name</label>
                            <input type="" class="form-control input-sm" id="first_name" name=""
                                placeholder="Enter your first name here">
                            <label>Last Name</label>
                            <input type="" class="form-control input-sm" id="last_name" name=""
                                placeholder="Enter your last name here">
                            <label>User</label>
                            <input type="" class="form-control input-sm" id="user" name=""
                                placeholder="Enter your user here">
                            <label>Password</label>
                            <input type="" class="form-control input-sm" id="password" name=""
                                placeholder="Enter your password here">
                            <p></p>
                            <span class="btn btn-primary" id="sign_up">Sign up</span>
                            <a href="index.php" class="btn btn-default">Back to Sign in</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
    $('#sign_up').click(function() {
        if ($('#first_name').val() == "") {
            alertify.alert("¡Oh no!", "You must write your first name");
            return false;
        } else if ($('#last_name').val() == "") {
            alertify.alert("¡Oh no!", "You must write your last name");
            return false;

        } else if ($('#user').val() == "") {
            alertify.alert("¡Oh no!", "You must write your user");
            return false;

        } else if ($('#password').val() == "") {
            alertify.alert("¡Oh no!", "You must write your password");
            return false;
        }

        url_post = "first_name=" + $('#first_name').val() +
            "&last_name=" + $('#last_name').val() +
            "&user=" + $('#user').val() +
            "&password=" + $('#password').val();

        $.ajax({
            type: "POST",
            url: "php/sign_up.php",
            data: url_post,
            success: function(r) 
            {
                if (r == 2) {
                    alertify.error("¡Oh no!, This user already exist, Try another one!");
                } else if (r == 1) {
                    $('#sign_up_form')[0].reset();
                    alertify.success("Successfully registered");
                } else {
                    alertify.error("Upps, Error when registering");
                }
            }
        });
    });
});
</script>