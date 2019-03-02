$(document).ready(() => {
    $('#search').keyup(() => {
        let search = $('#search').val();
        
        $.ajax({
            url: 'task_search.php',
            type: 'POST',
            data: { search },
            success: (response) => {
                let tasked = JSON.parse(response);
                console.log(tasked);
            }
        });
    });
});