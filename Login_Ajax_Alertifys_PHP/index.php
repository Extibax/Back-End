<!DOCTYPE html>
<html>

<head>
    <!-- Import Scripts & Meta vp -->
    <?php require_once "scripts.php" ?>

    <title>Login</title>
</head>

<body style="background-color:#3B95B4">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading text-center" style="background-color: #174970">
                        Programming World Login
                    </div>
                    <div class="panel panel-body">
                        <div style="text-align: center;">
                            <img class="img-responsive" src="img/imgLogin.jpg" class="img-rounded">
                        </div>
                        <p></p>
                        <label>User</label>
                        <input type="text" id="user" class="form-control input-sm" name="name"
                            placeholder="Enter your user here">
                        <label>Password</label>
                        <input type="password" id="password" class="form-control input-sm" name="password"
                            placeholder="Enter your password here">
                        <p></p>
                        <button class="btn btn-primary" id="log_in">Sign in</button>
                        <a href="sign_up.php" class="btn btn-danger">Sign up</a>
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
    $('#log_in').click(function() {
        if ($('#user').val() == "") {
            alertify.alert("¡Oh no!", "You must write your user");
            return false;
        } else if ($('#password').val() == "") {
            alertify.alert("¡Oh no!", "You must write your password");
            return false;
        }

        url_post = "user=" + $('#user').val() + "&password=" + $('#password').val();

        $.ajax({
            type: "POST",
            url: "php/sign_in.php",
            data: url_post,
            success: function(r) 
            {
                if (r == 1) {
                    window.location = "start.php";
                } else {
                    alertify.alert("Fallo al entrar");
                }
            }
        });
    });
});
</script>