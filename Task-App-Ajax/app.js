$(document).ready(() => {
    $('#task-result').hide();
    $('#search').keyup(() => {
        if ($('#search').val()) 
        {

            let search = $('#search').val();

            $.ajax({
                url: 'task_search.php',
                type: 'POST',
                data: {search},
                success: (response) => {
                    let tasks = JSON.parse(response);
                    let template = '';

                    tasks.forEach(task => {
                        template +=
                        `<li>
                            ${task.Title}
                        </li>`
                    });

                    $('#container').html(template);
                    $('#task-result').show();
                }
            });
        }

    });

    $('#task-form').submit((e) => {
        const postData = {
            Title: $('#Title').val(),
            Description: $('#Description').val()
        };
        $.post('task_add.php', postData, (response) => {
            console.log(response);
        });
        e.preventDefault();
    });

});