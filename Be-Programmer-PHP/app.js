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

        url_post = "save_habit" + "&habit_name=" + $('#habit_name').val() + "&habit_link=" + $('#habit_link').val();

        $.ajax({
            type: "POST",
            url: "save_habit.php",
            data: url_post,
            success: function(response) 
            {
                if (response == 1) 
                {
                    alertify.success('Task was saved');
                    $('#habit_form')[0].reset();
                } 
                else if (response == 2)
                {
                    alertify.alert("The task had an error");
                }
            }
        });
    });
});