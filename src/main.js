$(document).ready(function () {
    $('#category-form').on('submit', e => {
        e.preventDefault();
        const input = $('#category').val();
        if (input) {
            $('#category-form').find('.spinner-additional').css('display', 'inline-block');
            $.ajax({
                url: "requestHandler",
                type: 'POST',
                data: {
                    data: input,
                    action: 'category'
                },
                success: function(data) {
                    $('#category-form').find('.spinner-additional').hide();
                    const categories = JSON.parse(data);
                    let html = '';
                    for (let i in categories) {
                        html += `<li class="list-group-item">${categories[i]}</li>`;
                    }
                    $('.categories-list').html(html);
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
            $('#level-form').find('.spinner-additional').css('display', 'inline-block');
            $.ajax({
                url: "requestHandler",
                type: 'POST',
                data: {
                    data: input,
                    action: 'level'
                },
                success: function(data) {
                    $('#level-form').find('.spinner-additional').hide();
                    const levels = JSON.parse(data);
                    let html = '';
                    for (let i in levels) {
                        html += `<li class="list-group-item">${levels[i]}</li>`;
                    }
                    $('.levels-list').html(html);
                },
                error: function(e) {

                }
            })
        }
    });

    $('#question-form').on('submit', e => {
        e.preventDefault();
        const form = $('#question-form');
        if ($('#question').val()) {
            form.find('.spinner-additional').css('display', 'inline-block');
            $.ajax({
                url: "requestHandler",
                type: 'POST',
                data: form.serializeArray(),
                success: function(data) {
                    form.find('.spinner-additional').hide();
                },
                error: function(e) {

                }
            })
        }
    });

    $('#questions-table').DataTable();
});

