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