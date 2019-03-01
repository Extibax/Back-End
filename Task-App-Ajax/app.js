$(() => {
    $('#search').keyup(() => {
        let search = $('#search').val();
        
        $.ajax({
            url: 'task_search.php',
            type: 'POST',
            data: { search },
            success: (response) => {
                if (response == 1) {
                    console.log('The task was saved correctly');
                }
            }
        });
    });
});