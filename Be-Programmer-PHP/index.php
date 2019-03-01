<?php require_once 'includes/header.php' ?>

<body class="container-fluid bg-dark">

    <nav class="navbar sticky-top navbar-info bg-info">
        <a href="" class="navbar-brand text-dark">
            EXTIBAX
        </a>
        <div class="">
            <a href="index.html" class="btn btn-outline-dark active">Routine</a>
            <a href="dolist.html" class="btn btn-outline-dark">Do List</a>
            <a href="#" class="btn btn-outline-dark">Date Counter</a>
        </div>
    </nav>

    <h1 class="display-4 text-center text-white">Hey you! Be Programmer!</h1>

    <div class="w-100 mt-5 p-5">

        <ul class="list-group">
            <li class="list-group-item text-center bg-info mb-1 font-weight-bold">
                Routine
            </li>
            <li class="list-group-item">
                    <div class="form-group d-flex" id="habit_form">
                        <input class="form-control" type="text" id="habit_name" placeholder="Habit Name">
                        <input class="form-control mx-2" type="text" id="habit_link" placeholder="Habit Link">
                        <button class="btn btn-primary" id="save_habit" name="save_habit"><i class="fas fa-check"></i></button>
                    </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <span class="text-primary font-weight-bold">Bootstrap</span> Course
                </span>
                <a class="btn btn-outline-primary btn-sm" href="https://www.youtube.com/playlist?list=PLL0TiOXBeDagsYUYFO9WMwDtuDuoGZVB9" target="__blank">Go!</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <span class="text-primary font-weight-bold">PHP</span> Course
                </span>
                <a class="btn btn-outline-primary btn-sm" href="https://www.udemy.com/master-en-php-sql-poo-mvc-laravel-symfony-4-wordpress/learn/v4/content" target="__blank">Go!</a>
            </li>
        </ul>

    </div>

<?php require_once 'includes/footer.php' ?>

<script type='text/javascript'>
$(document).ready(function() {
    $('#save_habit').click(function() {
        if ($('#habit_name').val() == "")
        {
            alertify.error('¡Oh no!, You must enter a Habit Name');
            return false;
        }
        else if ($('#habit_link').val() == "")
        {
            alertify.error('¡Oh no!, You must enter a Habit Link');
            return false;
        }

        url_post = "habit_name=" + $('#habit_name').val() + "&habit_link=" + $('#habit_link').val();

        $.ajax({
            type: "POST",
            url: "save_habit.php",
            data: url_post,
            success: function(r) 
            {
                if (r == 1) {
                    alertify.success('All is OK');
                } else {
                    alertify.alert("Fallo al entrar");
                }
            }
        });
    });
});

</script>