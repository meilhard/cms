$(function () {

    $("body").layout({
        //resizable: true,
        //livePaneResizing: true
    });

    $('.page_container').jstree({
        'core': {
            data: {
                url: 'pages.json',
                data: function (node) {
                    return {'id': node.id};
                }
            },
            animation : 50,
            dblclick_toggle : false
        }
    }).on('select_node.jstree', function(event, sel) {

        $.get('content.json', {'id' : sel.node.id}, function(data) {
            $('.content').html('');
            $.each(data, function(index, val) {
                $('.content')
                    .append('<h3>'+val.title+'</h3>')
                    .append('<div>'+val.body+'</div>')
                    .append('<hr/>');
            })
        });

    });
});
