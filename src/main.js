$(document).ready(function () {
    $('#category-form').on('submit', e => {
        e.preventDefault();
        const input = $('#category').val();
        if (input) {
            $.ajax({
                url: "requestHandler.php",
                type: 'POST',
                data: {
                    data: input,
                    action: 'category'
                },
                success: function(data) {
                },
                error: function(e) {

                }
            })
        }
    });

    $('#level-form').on('submit', e => {
        e.preventDefault();
        const input = $('#level').val();
        if (input) {
            $.ajax({
                url: "requestHandler.php",
                type: 'POST',
                data: {
                    data: input,
                    action: 'level'
                },
                success: function(data) {
                },
                error: function(e) {

                }
            })
        }
    });

    $('#question-form').on('submit', e => {
        e.preventDefault();
        if ($('#question').val()) {
            $.ajax({
                url: "requestHandler.php",
                type: 'POST',
                data: $('#question-form').serializeArray(),
                success: function(data) {
                },
                error: function(e) {

                }
            })
        }
    });
});

