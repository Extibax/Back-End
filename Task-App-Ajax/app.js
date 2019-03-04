$(document).ready(() => {
    $('#task-result').hide();
    fetchTasks();
    $('#search').keyup(() => {
        if ($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: 'task_search.php',
                type: 'POST',
                data: {
                    search
                },
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
            fetchTasks();
            $('#task-form').trigger('reset');
        });
        e.preventDefault();
    });

    function fetchTasks() {
        $.ajax({
            url: 'task_list.php',
            type: 'GET',
            contentType: "application/json",
            success: (response) => {
                /* let tasks = JSON.parse(response); */
                let tasks = response;
                let template = '';

                tasks.forEach(task => {
                    template +=
                        `
                    <tr task-id="${task['ID']}">
                        <td>${task['ID']}</td>
                        <td>
                            <a class="task-edit" href="#">${task['Title']}</a>
                        </td>
                        <td>${task['Description']}</td>
                        <td>
                            <div class="btn-group">
                                <button class="task-delete btn btn-danger">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                    `;
                });
                $('#tasks').html(template);
            }
        });
    }

    $(document).on('click', '.task-delete', function() {
        if (confirm('Are you sure, That you want delete it?')) {
            let element = $(this)[0].parentElement.parentElement.parentElement;
            let ID = $(element).attr('task-id');

            $.post('task_delete.php', {ID}, (response) => {
                fetchTasks();
            });
        }
    });

    $(document).on('click', '.task-edit', function(){
        let element = $(this)[0].parentElement.parentElement;
        let ID = $(element).attr('task-id');
        
        $.post('task_request_edit.php'), {ID}, (response) => {
            console.log(response);
        }
    });

});

//Git test 1